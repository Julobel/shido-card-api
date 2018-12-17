<?php
/**
 * Created by jules aubel on 17/12/18
 */

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Class ScenarioCard
 * @package App\Entity
 * @ORM\Entity
 * @ApiResource
 */
class ScenarioCard
{
    /**
     * @var integer
     *
     * @ORM\Column(type="integer")
     */
    private $scenarioId;

    /**
     * @var integer
     *
     * @ORM\Column((type="integer")
     */
    private $cardId;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer")
     */
    private $fistChoiceCardId;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer")
     */
    private $secondChoiceCardid;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer")
     */
    private $finalCardId;

    /**
     * @return int
     */
    public function getScenarioId(): int
    {
        return $this->scenarioId;
    }

    /**
     * @param int $scenarioId
     */
    public function setScenarioId(int $scenarioId): void
    {
        $this->scenarioId = $scenarioId;
    }

    /**
     * @return int
     */
    public function getCardId(): int
    {
        return $this->cardId;
    }

    /**
     * @param int $cardId
     */
    public function setCardId(int $cardId): void
    {
        $this->cardId = $cardId;
    }

    /**
     * @return int
     */
    public function getFistChoiceCardId(): int
    {
        return $this->fistChoiceCardId;
    }

    /**
     * @param int $fistChoiceCardId
     */
    public function setFistChoiceCardId(int $fistChoiceCardId): void
    {
        $this->fistChoiceCardId = $fistChoiceCardId;
    }

    /**
     * @return int
     */
    public function getSecondChoiceCardid(): int
    {
        return $this->secondChoiceCardid;
    }

    /**
     * @param int $secondChoiceCardid
     */
    public function setSecondChoiceCardid(int $secondChoiceCardid): void
    {
        $this->secondChoiceCardid = $secondChoiceCardid;
    }

    /**
     * @return int
     */
    public function getFinalCardId(): int
    {
        return $this->finalCardId;
    }

    /**
     * @param int $finalCardId
     */
    public function setFinalCardId(int $finalCardId): void
    {
        $this->finalCardId = $finalCardId;
    }
}