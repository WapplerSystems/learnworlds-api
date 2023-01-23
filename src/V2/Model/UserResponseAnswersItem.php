<?php

namespace WapplerSystems\LearnWorldsApi\V2\Model;

class UserResponseAnswersItem extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Unique identifier of the question block inside the assessment
     *
     * @var string
     */
    protected $blockId;
    /**
     * The type of the question block inside the assessment
     *
     * @var string
     */
    protected $blockType;
    /**
     * The text content of the question block
     *
     * @var string
     */
    protected $description;
    /**
     * The text content of the user's answer for this question block
     *
     * @var string
     */
    protected $answer;
    /**
     * The points for the user's answer for this question block
     *
     * @var mixed
     */
    protected $points;
    /**
     * The maximum points an answer can gather for this question block
     *
     * @var mixed
     */
    protected $blockMaxScore;
    /**
     * 
     *
     * @var mixed
     */
    protected $answerData;
    /**
     * Unique identifier of the question block inside the assessment
     *
     * @return string
     */
    public function getBlockId() : string
    {
        return $this->blockId;
    }
    /**
     * Unique identifier of the question block inside the assessment
     *
     * @param string $blockId
     *
     * @return self
     */
    public function setBlockId(string $blockId) : self
    {
        $this->initialized['blockId'] = true;
        $this->blockId = $blockId;
        return $this;
    }
    /**
     * The type of the question block inside the assessment
     *
     * @return string
     */
    public function getBlockType() : string
    {
        return $this->blockType;
    }
    /**
     * The type of the question block inside the assessment
     *
     * @param string $blockType
     *
     * @return self
     */
    public function setBlockType(string $blockType) : self
    {
        $this->initialized['blockType'] = true;
        $this->blockType = $blockType;
        return $this;
    }
    /**
     * The text content of the question block
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * The text content of the question block
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * The text content of the user's answer for this question block
     *
     * @return string
     */
    public function getAnswer() : string
    {
        return $this->answer;
    }
    /**
     * The text content of the user's answer for this question block
     *
     * @param string $answer
     *
     * @return self
     */
    public function setAnswer(string $answer) : self
    {
        $this->initialized['answer'] = true;
        $this->answer = $answer;
        return $this;
    }
    /**
     * The points for the user's answer for this question block
     *
     * @return mixed
     */
    public function getPoints()
    {
        return $this->points;
    }
    /**
     * The points for the user's answer for this question block
     *
     * @param mixed $points
     *
     * @return self
     */
    public function setPoints($points) : self
    {
        $this->initialized['points'] = true;
        $this->points = $points;
        return $this;
    }
    /**
     * The maximum points an answer can gather for this question block
     *
     * @return mixed
     */
    public function getBlockMaxScore()
    {
        return $this->blockMaxScore;
    }
    /**
     * The maximum points an answer can gather for this question block
     *
     * @param mixed $blockMaxScore
     *
     * @return self
     */
    public function setBlockMaxScore($blockMaxScore) : self
    {
        $this->initialized['blockMaxScore'] = true;
        $this->blockMaxScore = $blockMaxScore;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getAnswerData()
    {
        return $this->answerData;
    }
    /**
     * 
     *
     * @param mixed $answerData
     *
     * @return self
     */
    public function setAnswerData($answerData) : self
    {
        $this->initialized['answerData'] = true;
        $this->answerData = $answerData;
        return $this;
    }
}