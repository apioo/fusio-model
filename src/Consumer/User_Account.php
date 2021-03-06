<?php

declare(strict_types = 1);

namespace Fusio\Model\Consumer;


class User_Account implements \JsonSerializable
{
    /**
     * @var int|null
     */
    protected $id;
    /**
     * @var int|null
     */
    protected $status;
    /**
     * @var string|null
     */
    protected $name;
    /**
     * @var string|null
     */
    protected $email;
    /**
     * @var int|null
     */
    protected $points;
    /**
     * @var array<string>|null
     */
    protected $scopes;
    /**
     * @var User_Attributes|null
     */
    protected $attributes;
    /**
     * @var \DateTime|null
     */
    protected $date;
    /**
     * @param int|null $id
     */
    public function setId(?int $id) : void
    {
        $this->id = $id;
    }
    /**
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * @param int|null $status
     */
    public function setStatus(?int $status) : void
    {
        $this->status = $status;
    }
    /**
     * @return int|null
     */
    public function getStatus() : ?int
    {
        return $this->status;
    }
    /**
     * @param string|null $name
     */
    public function setName(?string $name) : void
    {
        $this->name = $name;
    }
    /**
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * @param string|null $email
     */
    public function setEmail(?string $email) : void
    {
        $this->email = $email;
    }
    /**
     * @return string|null
     */
    public function getEmail() : ?string
    {
        return $this->email;
    }
    /**
     * @param int|null $points
     */
    public function setPoints(?int $points) : void
    {
        $this->points = $points;
    }
    /**
     * @return int|null
     */
    public function getPoints() : ?int
    {
        return $this->points;
    }
    /**
     * @param array<string>|null $scopes
     */
    public function setScopes(?array $scopes) : void
    {
        $this->scopes = $scopes;
    }
    /**
     * @return array<string>|null
     */
    public function getScopes() : ?array
    {
        return $this->scopes;
    }
    /**
     * @param User_Attributes|null $attributes
     */
    public function setAttributes(?User_Attributes $attributes) : void
    {
        $this->attributes = $attributes;
    }
    /**
     * @return User_Attributes|null
     */
    public function getAttributes() : ?User_Attributes
    {
        return $this->attributes;
    }
    /**
     * @param \DateTime|null $date
     */
    public function setDate(?\DateTime $date) : void
    {
        $this->date = $date;
    }
    /**
     * @return \DateTime|null
     */
    public function getDate() : ?\DateTime
    {
        return $this->date;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('id' => $this->id, 'status' => $this->status, 'name' => $this->name, 'email' => $this->email, 'points' => $this->points, 'scopes' => $this->scopes, 'attributes' => $this->attributes, 'date' => $this->date), static function ($value) : bool {
            return $value !== null;
        });
    }
}
