<?php

class MovieRecommender {

    private $ratings;

    public function __construct($ratings) {
        $this->ratings = $ratings;
    }

    public function getRecommendationsForUser($userId) {
        $userRatings = $this->getUserRatings($userId);

        // Check if user has enough ratings to make recommendations
        if (count($userRatings) < 3) {
            // Fallback system: Recommend popular movies
            return $this->getPopularMovies();
        }

        // Calculate cosine similarities for all other users
        $cosineSimilarities = [];
        foreach ($this->ratings as $otherUserId => $otherUserRatings) {
            if ($otherUserId != $userId) {
                $cosineSimilarity = $this->calculateCosineSimilarity($userRatings, $otherUserRatings);
                $cosineSimilarities[$otherUserId] = $cosineSimilarity;
            }
        }

        // Get top 5 most similar users
        arsort($cosineSimilarities);
        $top5SimilarUsers = array_slice(array_keys($cosineSimilarities), 0, 5);

        // Calculate weighted recommendations based on similarity scores
        $weightedRecommendations = [];
        foreach ($this->ratings as $movieId => $otherUserRatings) {
            if (!isset($userRatings[$movieId])) {
                $weightedRating = 0;
                foreach ($top5SimilarUsers as $similarUserId) {
                    if (isset($otherUserRatings[$movieId])) {
                        $weightedRating += $cosineSimilarities[$similarUserId] * $otherUserRatings[$movieId];
                    }
                }
                $weightedRecommendations[$movieId] = $weightedRating;
            }
        }

        // Sort recommendations by weighted rating in descending order
        arsort($weightedRecommendations);

        // Return top 10 recommendations
        return array_slice(array_keys($weightedRecommendations), 0, 10);
    }

    private function getUserRatings($userId) {
        $userRatings = [];
        foreach ($this->ratings as $movieId => $otherUserRatings) {
            if (isset($otherUserRatings[$userId])) {
                $userRatings[$movieId] = $otherUserRatings[$userId];
            }
        }
        return $userRatings;
    }

    private function getPopularMovies() {
        $movieRatings = [];
        foreach ($this->ratings as $movieId => $otherUserRatings) {
            $ratingSum = 0;
            $ratingCount = 0;
            foreach ($otherUserRatings as $userId => $rating) {
                if ($rating !== 'N/A' && $rating !== '?') {
                    $ratingSum += $rating;
                    $ratingCount++;
                }
            }
            if ($ratingCount > 0) {
                $averageRating = $ratingSum / $ratingCount;
                $movieRatings[$movieId] = $averageRating;
            }
        }

        // Sort movies by average rating in descending order
        arsort($movieRatings);

        // Return top 10 popular movies
        return array_slice(array_keys($movieRatings), 0, 10);
    }

    private function calculateCosineSimilarity($user1Ratings, $user2Ratings) {
        $dotProduct = 0;
        $norm1 = 0;
        $norm2 = 0;

        foreach ($user1Ratings as $movieId => $rating1) {
            if (isset($user2Ratings[$movieId])) {
                $rating2 = $user2Ratings[$movieId];
                $dotProduct += $rating1 * $rating2;
                $norm1 += pow($rating1, 2);
                $norm2 += pow($rating2, 2);
            }
        }

        $cosineSimilarity = $dotProduct / sqrt($norm1 * $norm2);
        return $cosineSimilarity;
    }
}

// Example usage
$ratings = [
    'Alice' => ['Star Wars' => 5, 'The Matrix' => 4, 'Inception' => 3],
    'Bob' => ['Titanic' => 5, 'Star Wars' => 2, 'The Godfather' => 4],
    'Mia' => [' Pulp Fiction' => 4, 'Forrest Gump' => 3, 'The Godfather' => 0],
];