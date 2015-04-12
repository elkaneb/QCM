<?php

namespace Qcm\QcmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Questions
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Qcm\QcmBundle\Entity\QuestionsRepository")
 */
class Questions
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="question", type="string", length=255)
     */
    private $question;

    /**
     * @var string
     *
     * @ORM\Column(name="rep1", type="string", length=255)
     */
    private $rep1;

    /**
     * @var string
     *
     * @ORM\Column(name="rep2", type="string", length=255, nullable=true)
     */
    private $rep2;

    /**
     * @var string
     *
     * @ORM\Column(name="rep3", type="string", length=255, nullable=true)
     */
    private $rep3;

    /**
     * @var string
     *
     * @ORM\Column(name="rep4", type="string", length=255, nullable=true)
     */
    private $rep4;

    /**
     * @var integer
     *
     * @ORM\Column(name="user", type="integer", nullable=true)
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255)
     */
    private $image;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set question
     *
     * @param string $question
     * @return Questions
     */
    public function setQuestion($question)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get question
     *
     * @return string 
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Set rep1
     *
     * @param string $rep1
     * @return Questions
     */
    public function setRep1($rep1)
    {
        $this->rep1 = $rep1;

        return $this;
    }

    /**
     * Get rep1
     *
     * @return string 
     */
    public function getRep1()
    {
        return $this->rep1;
    }

    /**
     * Set rep2
     *
     * @param string $rep2
     * @return Questions
     */
    public function setRep2($rep2)
    {
        $this->rep2 = $rep2;

        return $this;
    }

    /**
     * Get rep2
     *
     * @return string 
     */
    public function getRep2()
    {
        return $this->rep2;
    }

    /**
     * Set rep3
     *
     * @param string $rep3
     * @return Questions
     */
    public function setRep3($rep3)
    {
        $this->rep3 = $rep3;

        return $this;
    }

    /**
     * Get rep3
     *
     * @return string 
     */
    public function getRep3()
    {
        return $this->rep3;
    }

    /**
     * Set rep4
     *
     * @param string $rep4
     * @return Questions
     */
    public function setRep4($rep4)
    {
        $this->rep4 = $rep4;

        return $this;
    }

    /**
     * Get rep4
     *
     * @return string 
     */
    public function getRep4()
    {
        return $this->rep4;
    }

    /**
     * Set user
     *
     * @param integer $user
     * @return Questions
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return integer 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set image
     *
     * @param string $image
     * @return Questions
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }
}
