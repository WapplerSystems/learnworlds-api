<?php

/*
 * This file is part of the package wapplersystems/learnworlds-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace WapplerSystems\LearnWorldsApi\Model;

use ArrayObject;

class Grade extends ArrayObject
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
     * Unique identifier of the submission of responses by the user specified by the user id
     *
     * @var string
     */
    protected $id;
    /**
     * Unique identifier of the user who submitted the responses
     *
     * @var string
     */
    protected $userId;
    /**
     * Email account of the user who submitted the responses
     *
     * @var string
     */
    protected $email;
    /**
     * The grade that corresponds to the responses provided by the user
     *
     * @var float
     */
    protected $grade;
    /**
     * Date the submission was created (started), in UNIX timestamp format
     *
     * @var float
     */
    protected $created;
    /**
     * Date the submission was modified for the last time, in UNIX timestamp format
     *
     * @var float
     */
    protected $modified;
    /**
     * Date the submission was finished (submitted), in UNIX timestamp format
     *
     * @var float
     */
    protected $submittedTimestamp;
    /**
     *
     *
     * @var GradeLearningUnit
     */
    protected $learningUnit;

    /**
     * Unique identifier of the submission of responses by the user specified by the user id
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Unique identifier of the submission of responses by the user specified by the user id
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }

    /**
     * Unique identifier of the user who submitted the responses
     *
     * @return string
     */
    public function getUserId(): string
    {
        return $this->userId;
    }

    /**
     * Unique identifier of the user who submitted the responses
     *
     * @param string $userId
     *
     * @return self
     */
    public function setUserId(string $userId): self
    {
        $this->initialized['userId'] = true;
        $this->userId = $userId;
        return $this;
    }

    /**
     * Email account of the user who submitted the responses
     *
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Email account of the user who submitted the responses
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email): self
    {
        $this->initialized['email'] = true;
        $this->email = $email;
        return $this;
    }

    /**
     * The grade that corresponds to the responses provided by the user
     *
     * @return float
     */
    public function getGrade(): float
    {
        return $this->grade;
    }

    /**
     * The grade that corresponds to the responses provided by the user
     *
     * @param float $grade
     *
     * @return self
     */
    public function setGrade(float $grade): self
    {
        $this->initialized['grade'] = true;
        $this->grade = $grade;
        return $this;
    }

    /**
     * Date the submission was created (started), in UNIX timestamp format
     *
     * @return float
     */
    public function getCreated(): float
    {
        return $this->created;
    }

    /**
     * Date the submission was created (started), in UNIX timestamp format
     *
     * @param float $created
     *
     * @return self
     */
    public function setCreated(float $created): self
    {
        $this->initialized['created'] = true;
        $this->created = $created;
        return $this;
    }

    /**
     * Date the submission was modified for the last time, in UNIX timestamp format
     *
     * @return float
     */
    public function getModified(): float
    {
        return $this->modified;
    }

    /**
     * Date the submission was modified for the last time, in UNIX timestamp format
     *
     * @param float $modified
     *
     * @return self
     */
    public function setModified(float $modified): self
    {
        $this->initialized['modified'] = true;
        $this->modified = $modified;
        return $this;
    }

    /**
     * Date the submission was finished (submitted), in UNIX timestamp format
     *
     * @return float
     */
    public function getSubmittedTimestamp(): float
    {
        return $this->submittedTimestamp;
    }

    /**
     * Date the submission was finished (submitted), in UNIX timestamp format
     *
     * @param float $submittedTimestamp
     *
     * @return self
     */
    public function setSubmittedTimestamp(float $submittedTimestamp): self
    {
        $this->initialized['submittedTimestamp'] = true;
        $this->submittedTimestamp = $submittedTimestamp;
        return $this;
    }

    /**
     *
     *
     * @return GradeLearningUnit
     */
    public function getLearningUnit(): GradeLearningUnit
    {
        return $this->learningUnit;
    }

    /**
     *
     *
     * @param GradeLearningUnit $learningUnit
     *
     * @return self
     */
    public function setLearningUnit(GradeLearningUnit $learningUnit): self
    {
        $this->initialized['learningUnit'] = true;
        $this->learningUnit = $learningUnit;
        return $this;
    }
}
