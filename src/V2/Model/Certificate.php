<?php

/*
 * This file is part of the package wapplersystems/learnworlds-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace WapplerSystems\LearnWorldsApi\V2\Model;

class Certificate extends \ArrayObject
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
     * Unique identifier of the certificate
     *
     * @var string
     */
    protected $id;
    /**
     * Title of the certificate
     *
     * @var string
     */
    protected $title;
    /**
     * Date the certification was issued, in Unix timestamp format
     *
     * @var float
     */
    protected $issued;
    /**
     * Number of attempts
     *
     * @var int
     */
    protected $attempts;
    /**
     * Type of the certificate
     *
     * @var string
     */
    protected $type;
    /**
     * Status of the certificate
     *
     * @var string
     */
    protected $status;
    /**
     * Score of the certificate
     *
     * @var string
     */
    protected $score;
    /**
     * Short URL of the certificate
     *
     * @var string
     */
    protected $shortUrl;
    /**
     * Form data of the certificate
     *
     * @var mixed
     */
    protected $form;
    /**
     * User related data
     *
     * @var CertificateUser
     */
    protected $user;
    /**
     * Unique identifier of the course
     *
     * @var string
     */
    protected $courseId;

    /**
     * Unique identifier of the certificate
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Unique identifier of the certificate
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
     * Title of the certificate
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Title of the certificate
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title): self
    {
        $this->initialized['title'] = true;
        $this->title = $title;
        return $this;
    }

    /**
     * Date the certification was issued, in Unix timestamp format
     *
     * @return float
     */
    public function getIssued(): float
    {
        return $this->issued;
    }

    /**
     * Date the certification was issued, in Unix timestamp format
     *
     * @param float $issued
     *
     * @return self
     */
    public function setIssued(float $issued): self
    {
        $this->initialized['issued'] = true;
        $this->issued = $issued;
        return $this;
    }

    /**
     * Number of attempts
     *
     * @return int
     */
    public function getAttempts(): int
    {
        return $this->attempts;
    }

    /**
     * Number of attempts
     *
     * @param int $attempts
     *
     * @return self
     */
    public function setAttempts(int $attempts): self
    {
        $this->initialized['attempts'] = true;
        $this->attempts = $attempts;
        return $this;
    }

    /**
     * Type of the certificate
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Type of the certificate
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }

    /**
     * Status of the certificate
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * Status of the certificate
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }

    /**
     * Score of the certificate
     *
     * @return string
     */
    public function getScore(): string
    {
        return $this->score;
    }

    /**
     * Score of the certificate
     *
     * @param string $score
     *
     * @return self
     */
    public function setScore(string $score): self
    {
        $this->initialized['score'] = true;
        $this->score = $score;
        return $this;
    }

    /**
     * Short URL of the certificate
     *
     * @return string
     */
    public function getShortUrl(): string
    {
        return $this->shortUrl;
    }

    /**
     * Short URL of the certificate
     *
     * @param string $shortUrl
     *
     * @return self
     */
    public function setShortUrl(string $shortUrl): self
    {
        $this->initialized['shortUrl'] = true;
        $this->shortUrl = $shortUrl;
        return $this;
    }

    /**
     * Form data of the certificate
     *
     * @return mixed
     */
    public function getForm()
    {
        return $this->form;
    }

    /**
     * Form data of the certificate
     *
     * @param mixed $form
     *
     * @return self
     */
    public function setForm($form): self
    {
        $this->initialized['form'] = true;
        $this->form = $form;
        return $this;
    }

    /**
     * User related data
     *
     * @return CertificateUser
     */
    public function getUser(): CertificateUser
    {
        return $this->user;
    }

    /**
     * User related data
     *
     * @param CertificateUser $user
     *
     * @return self
     */
    public function setUser(CertificateUser $user): self
    {
        $this->initialized['user'] = true;
        $this->user = $user;
        return $this;
    }

    /**
     * Unique identifier of the course
     *
     * @return string
     */
    public function getCourseId(): string
    {
        return $this->courseId;
    }

    /**
     * Unique identifier of the course
     *
     * @param string $courseId
     *
     * @return self
     */
    public function setCourseId(string $courseId): self
    {
        $this->initialized['courseId'] = true;
        $this->courseId = $courseId;
        return $this;
    }
}
