<?php

/*
 * This file is part of the package wapplersystems/learnworlds-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace WapplerSystems\LearnWorldsApi\Model;

use ArrayObject;

class CourseAnalytics extends ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Number of students
     *
     * @var int
     */
    protected $students;
    /**
     * Number of videos
     *
     * @var int
     */
    protected $videos;
    /**
     * Number of learning activities
     *
     * @var int
     */
    protected $learningUnits;
    /**
     * Time spend in videos in seconds
     *
     * @var int
     */
    protected $videoTime;
    /**
     * Average score (%)
     *
     * @var float
     */
    protected $avgScoreRate;
    /**
     * Success rate (%)
     *
     * @var float
     */
    protected $successRate;
    /**
     * Total study time in seconds
     *
     * @var int
     */
    protected $totalStudyTime;
    /**
     * Average time to finish the course in seconds
     *
     * @var int
     */
    protected $avgTimeToFinish;
    /**
     * Number of social interactions
     *
     * @var int
     */
    protected $socialInteractions;
    /**
     * Number of issued certifications
     *
     * @var int
     */
    protected $certificatesIssued;

    /**
     * Number of students
     *
     * @return int
     */
    public function getStudents(): int
    {
        return $this->students;
    }

    /**
     * Number of students
     *
     * @param int $students
     *
     * @return self
     */
    public function setStudents(int $students): self
    {
        $this->initialized['students'] = true;
        $this->students = $students;
        return $this;
    }

    /**
     * Number of videos
     *
     * @return int
     */
    public function getVideos(): int
    {
        return $this->videos;
    }

    /**
     * Number of videos
     *
     * @param int $videos
     *
     * @return self
     */
    public function setVideos(int $videos): self
    {
        $this->initialized['videos'] = true;
        $this->videos = $videos;
        return $this;
    }

    /**
     * Number of learning activities
     *
     * @return int
     */
    public function getLearningUnits(): int
    {
        return $this->learningUnits;
    }

    /**
     * Number of learning activities
     *
     * @param int $learningUnits
     *
     * @return self
     */
    public function setLearningUnits(int $learningUnits): self
    {
        $this->initialized['learningUnits'] = true;
        $this->learningUnits = $learningUnits;
        return $this;
    }

    /**
     * Time spend in videos in seconds
     *
     * @return int
     */
    public function getVideoTime(): int
    {
        return $this->videoTime;
    }

    /**
     * Time spend in videos in seconds
     *
     * @param int $videoTime
     *
     * @return self
     */
    public function setVideoTime(int $videoTime): self
    {
        $this->initialized['videoTime'] = true;
        $this->videoTime = $videoTime;
        return $this;
    }

    /**
     * Average score (%)
     *
     * @return float
     */
    public function getAvgScoreRate(): float
    {
        return $this->avgScoreRate;
    }

    /**
     * Average score (%)
     *
     * @param float $avgScoreRate
     *
     * @return self
     */
    public function setAvgScoreRate(float $avgScoreRate): self
    {
        $this->initialized['avgScoreRate'] = true;
        $this->avgScoreRate = $avgScoreRate;
        return $this;
    }

    /**
     * Success rate (%)
     *
     * @return float
     */
    public function getSuccessRate(): float
    {
        return $this->successRate;
    }

    /**
     * Success rate (%)
     *
     * @param float $successRate
     *
     * @return self
     */
    public function setSuccessRate(float $successRate): self
    {
        $this->initialized['successRate'] = true;
        $this->successRate = $successRate;
        return $this;
    }

    /**
     * Total study time in seconds
     *
     * @return int
     */
    public function getTotalStudyTime(): int
    {
        return $this->totalStudyTime;
    }

    /**
     * Total study time in seconds
     *
     * @param int $totalStudyTime
     *
     * @return self
     */
    public function setTotalStudyTime(int $totalStudyTime): self
    {
        $this->initialized['totalStudyTime'] = true;
        $this->totalStudyTime = $totalStudyTime;
        return $this;
    }

    /**
     * Average time to finish the course in seconds
     *
     * @return int
     */
    public function getAvgTimeToFinish(): int
    {
        return $this->avgTimeToFinish;
    }

    /**
     * Average time to finish the course in seconds
     *
     * @param int $avgTimeToFinish
     *
     * @return self
     */
    public function setAvgTimeToFinish(int $avgTimeToFinish): self
    {
        $this->initialized['avgTimeToFinish'] = true;
        $this->avgTimeToFinish = $avgTimeToFinish;
        return $this;
    }

    /**
     * Number of social interactions
     *
     * @return int
     */
    public function getSocialInteractions(): int
    {
        return $this->socialInteractions;
    }

    /**
     * Number of social interactions
     *
     * @param int $socialInteractions
     *
     * @return self
     */
    public function setSocialInteractions(int $socialInteractions): self
    {
        $this->initialized['socialInteractions'] = true;
        $this->socialInteractions = $socialInteractions;
        return $this;
    }

    /**
     * Number of issued certifications
     *
     * @return int
     */
    public function getCertificatesIssued(): int
    {
        return $this->certificatesIssued;
    }

    /**
     * Number of issued certifications
     *
     * @param int $certificatesIssued
     *
     * @return self
     */
    public function setCertificatesIssued(int $certificatesIssued): self
    {
        $this->initialized['certificatesIssued'] = true;
        $this->certificatesIssued = $certificatesIssued;
        return $this;
    }
}
