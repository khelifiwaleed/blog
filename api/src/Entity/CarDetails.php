<?php

namespace App\Entity;

use App\Repository\CarDetailsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CarDetailsRepository::class)]
class CarDetails
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: "id", type: "integer", nullable: true)]
    private ?int $id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    #[ORM\Column(name: "reg_number", type: "string", length: 255, nullable: true)]
    private ?string $regNumber = null;

    #[ORM\Column(name: "vin", type: "string", length: 255, nullable: true)]
    private ?string $vin = null;

    #[ORM\Column(name: "first_registration", type: "datetime", nullable: true)]
    private ?\DateTimeInterface $firstRegistration = null;

    #[ORM\Column(name: "date_gray_card", type: "datetime", nullable: true)]
    private ?\DateTimeInterface $dateGrayCard = null;

    #[ORM\Column(name: "make_id", type: "integer", nullable: true)]
    private ?int $makeId = null;

    #[ORM\Column(name: "make_name", type: "string", nullable: true)]
    private ?string $makeName = null;

    #[ORM\Column(name: "model_id", type: "integer", nullable: true)]
    private ?int $modelId = null;

    #[ORM\Column(name: "model_name", type: "string", nullable: true)]
    private ?string $modelName = null;

    #[ORM\Column(name: "model_type", type: "string", nullable: true)]
    private ?string $carType = null;

    #[ORM\Column(name: "registration_month", type: "integer", nullable: true)]
    private ?int $registrationMonth = null;

    #[ORM\Column(name: "registration_year", type: "integer", nullable: true)]
    private ?int $registrationYear = null;

    #[ORM\Column(name: "fuel_type_id", type: "integer", nullable: true)]
    private ?int $fuelTypeId = null;

    #[ORM\Column(name: "fuel_type_name", type: "string", nullable: true)]
    private ?string $fuelTypeName = null;

    #[ORM\Column(name: "body_type_id", type: "integer", nullable: true)]
    private ?int $bodyTypeId = null;

    #[ORM\Column(name: "body_type_name", type: "string", nullable: true)]
    private ?string $bodyTypeName = null;

    #[ORM\Column(name: "doors", type: "integer", nullable: true)]
    private ?int $doors = null;

    #[ORM\Column(name: "gear_box_id", type: "integer", nullable: true)]
    private ?int $gearBoxId = null;

    #[ORM\Column(name: "gear_box_name", type: "string", nullable: true)]
    private ?string $gearBoxName = null;

    #[ORM\Column(name: "din_power", type: "integer", nullable: true)]
    private ?int $dinPower = null;

    #[ORM\Column(name: "horse_power", type: "integer", nullable: true)]
    private ?int $horsePower = null;

    #[ORM\Column(name: "version_id", type: "integer", nullable: true)]
    private ?int $versionId = null;

    #[ORM\Column(name: "segment_id", type: "integer", nullable: true)]
    private ?int $segmentId = null;

    #[ORM\Column(name: "version_name", type: "string", nullable: true)]
    private ?string $versionName = null;

    #[ORM\Column(name: "finish", type: "string", nullable: true)]
    private ?string $finish = null;

    #[ORM\Column(name: "finish_version", type: "string", nullable: true)]
    private ?string $finishVersion = null;

    #[ORM\Column(name: "liter", type: "float", nullable: true)]
    private ?float $liter = null;

//    #[ORM\OneToOne(targetEntity: CarState::class, cascade: ["persist"])]
//    #[ORM\JoinColumn(name: "car_state_id", referencedColumnName: "id")]
//    private $carState;

    #[ORM\Column(name: "timestamp", type: "datetime", nullable: true)]
    private ?\DateTimeInterface $timestamp = null;



    public function __construct()
    {
        $this->timestamp = new \DateTime();
    }

    /**
     * Set regNumber.
     *
     * @param string|null $regNumber
     *
     * @return CarDetails
     */
    public function setRegNumber($regNumber = null)
    {
        $this->regNumber = $regNumber;

        return $this;
    }

    /**
     * Get regNumber.
     *
     * @return string|null
     */
    public function getRegNumber()
    {
        return $this->regNumber;
    }

    /**
     * Set vin.
     *
     * @param string|null $vin
     *
     * @return CarDetails
     */
    public function setVin($vin = null)
    {
        $this->vin = $vin;

        return $this;
    }

    /**
     * Get vin.
     *
     * @return string|null
     */
    public function getVin()
    {
        return $this->vin;
    }

    /**
     * Set firstRegistration.
     *
     * @param date|null $firstRegistration
     *
     * @return CarDetails
     */
    public function setFirstRegistration($firstRegistration = null)
    {
        $this->firstRegistration = $firstRegistration;

        return $this;
    }

    /**
     * Get firstRegistration.
     *
     * @return date|null
     */
    public function getFirstRegistration()
    {
        return $this->firstRegistration;
    }

    /**
     * Set makeId.
     *
     * @param integer $makeId
     *
     * @return CarDetails
     */
    public function setMakeId($makeId)
    {
        $this->makeId = $makeId;

        return $this;
    }

    /**
     * Get makeId.
     *
     * @return integer
     */
    public function getMakeId()
    {
        return $this->makeId;
    }

    /**
     * Set makeName.
     *
     * @param string|null $makeName
     *
     * @return CarDetails
     */
    public function setMakeName($makeName = null)
    {
        $this->makeName = $makeName;

        return $this;
    }

    /**
     * Get makeName.
     *
     * @return string|null
     */
    public function getMakeName()
    {
        return $this->makeName;
    }

    /**
     * Set modelId.
     *
     * @param integer $modelId
     *
     * @return CarDetails
     */
    public function setModelId($modelId)
    {
        $this->modelId = $modelId;

        return $this;
    }

    /**
     * Get modelId.
     *
     * @return integer
     */
    public function getModelId()
    {
        return $this->modelId;
    }

    /**
     * Set modelName.
     *
     * @param string|null $modelName
     *
     * @return CarDetails
     */
    public function setModelName($modelName = null)
    {
        $this->modelName = $modelName;

        return $this;
    }

    /**
     * Get modelName.
     *
     * @return string|null
     */
    public function getModelName()
    {
        return $this->modelName;
    }

    /**
     * Set registrationMonth.
     *
     * @param integer|null $registrationMonth
     *
     * @return CarDetails
     */
    public function setRegistrationMonth($registrationMonth = null)
    {
        $this->registrationMonth = $registrationMonth;

        return $this;
    }

    /**
     * Get registrationMonth.
     *
     * @return integer|null
     */
    public function getRegistrationMonth()
    {
        return $this->registrationMonth;
    }

    /**
     * Set registrationYear.
     *
     * @param integer|null $registrationYear
     *
     * @return CarDetails
     */
    public function setRegistrationYear($registrationYear = null)
    {
        $this->registrationYear = $registrationYear;

        return $this;
    }

    /**
     * Get registrationYear.
     *
     * @return integer|null
     */
    public function getRegistrationYear()
    {
        return $this->registrationYear;
    }

    /**
     * Set fuelTypeId.
     *
     * @param integer|null $fuelTypeId
     *
     * @return CarDetails
     */
    public function setFuelTypeId($fuelTypeId = null)
    {
        $this->fuelTypeId = $fuelTypeId;

        return $this;
    }

    /**
     * Get fuelTypeId.
     *
     * @return integer|null
     */
    public function getFuelTypeId()
    {
        return $this->fuelTypeId;
    }

    /**
     * Set fuelTypeName.
     *
     * @param string|null $fuelTypeName
     *
     * @return CarDetails
     */
    public function setFuelTypeName($fuelTypeName = null)
    {
        $this->fuelTypeName = $fuelTypeName;

        return $this;
    }

    /**
     * Get fuelTypeName.
     *
     * @return string|null
     */
    public function getFuelTypeName()
    {
        return $this->fuelTypeName;
    }

    /**
     * Set bodyTypeId.
     *
     * @param integer|null $bodyTypeId
     *
     * @return CarDetails
     */
    public function setBodyTypeId($bodyTypeId = null)
    {
        $this->bodyTypeId = $bodyTypeId;

        return $this;
    }

    /**
     * Get bodyTypeId.
     *
     * @return integer|null
     */
    public function getBodyTypeId()
    {
        return $this->bodyTypeId;
    }

    /**
     * Set bodyTypeName.
     *
     * @param string|null $bodyTypeName
     *
     * @return CarDetails
     */
    public function setBodyTypeName($bodyTypeName = null)
    {
        $this->bodyTypeName = $bodyTypeName;

        return $this;
    }

    /**
     * Get bodyTypeName.
     *
     * @return string|null
     */
    public function getBodyTypeName()
    {
        return $this->bodyTypeName;
    }

    /**
     * Set doors.
     *
     * @param integer|null $doors
     *
     * @return CarDetails
     */
    public function setDoors($doors = null)
    {
        $this->doors = $doors;

        return $this;
    }

    /**
     * Get doors.
     *
     * @return integer|null
     */
    public function getDoors()
    {
        return $this->doors;
    }

    /**
     * Set gearBoxId.
     *
     * @param integer|null $gearBoxId
     *
     * @return CarDetails
     */
    public function setGearBoxId($gearBoxId = null)
    {
        $this->gearBoxId = $gearBoxId;

        return $this;
    }

    /**
     * Get gearBoxId.
     *
     * @return integer|null
     */
    public function getGearBoxId()
    {
        return $this->gearBoxId;
    }

    /**
     * Set gearBoxName.
     *
     * @param string|null $gearBoxName
     *
     * @return CarDetails
     */
    public function setGearBoxName($gearBoxName = null)
    {
        $this->gearBoxName = $gearBoxName;

        return $this;
    }

    /**
     * Get gearBoxName.
     *
     * @return string|null
     */
    public function getGearBoxName()
    {
        return $this->gearBoxName;
    }

    /**
     * Set dinPower.
     *
     * @param integer|null $dinPower
     *
     * @return CarDetails
     */
    public function setDinPower($dinPower = null)
    {
        $this->dinPower = $dinPower;

        return $this;
    }

    /**
     * Get dinPower.
     *
     * @return integer|null
     */
    public function getDinPower()
    {
        return $this->dinPower;
    }

    /**
     * Set horsePower.
     *
     * @param integer|null $horsePower
     *
     * @return CarDetails
     */
    public function setHorsePower($horsePower = null)
    {
        $this->horsePower = $horsePower;

        return $this;
    }

    /**
     * Get horsePower.
     *
     * @return integer|null
     */
    public function getHorsePower()
    {
        return $this->horsePower;
    }

    /**
     * Set versionId.
     *
     * @param integer|null $versionId
     *
     * @return CarDetails
     */
    public function setVersionId($versionId = null)
    {
        $this->versionId = $versionId;

        return $this;
    }

    /**
     * Get versionId.
     *
     * @return integer|null
     */
    public function getVersionId()
    {
        return $this->versionId;
    }

    /**
     * Set versionName.
     *
     * @param string|null $versionName
     *
     * @return CarDetails
     */
    public function setVersionName($versionName = null)
    {
        $this->versionName = $versionName;

        return $this;
    }

    /**
     * Get versionName.
     *
     * @return string|null
     */
    public function getVersionName()
    {
        return $this->versionName;
    }

    /**
     * Set segmentId.
     *
     * @param integer|null $segmentId
     *
     * @return CarDetails
     */
    public function setSegmentId($segmentId = null)
    {
        $this->segmentId = $segmentId;

        return $this;
    }

    /**
     * Get segmentId.
     *
     * @return integer|null
     */
    public function getSegmentId()
    {
        return $this->segmentId;
    }

    /**
     * @return string
     */
    public function getCarType()
    {
        return $this->carType;
    }

    /**
     * @param string $carType
     * @return CarDetails
     */
    public function setCarType(string $carType)
    {
        $this->carType = $carType;
    }

    /**
     * Get finish.
     *
     * @return integer|null
     */
    public function getFinish()
    {
        return $this->finish;
    }

    /**
     * Set finish.
     *
     * @param string|null $finish
     *
     * @return CarDetails
     */
    public function setFinish($finish = null)
    {
        $this->finish = $finish;

        return $this;
    }

    /**
     * @return string
     */
    public function getFinishVersion()
    {
        return $this->finishVersion;
    }

    /**
     * Set finishVersion.
     *
     * @param string|null $finishVersion
     *
     * @return CarDetails
     */
    public function setFinishVersion($finishVersion = null)
    {
        $this->finishVersion = $finishVersion;

        return $this;
    }

    /**
     * Get liter.
     *
     * @return float|null
     */
    public function getLiter()
    {
        return $this->liter;
    }

    /**
     * Set liter.
     *
     * @param float|null $liter
     *
     * @return CarDetails
     */
    public function setLiter($liter = null)
    {
        $this->liter = $liter;

        return $this;
    }
//
//    /**
//     * Set carState.
//     *
//     * @param \App\Entity\CarState|null $carState
//     *
//     * @return CarDetails
//     */
//    public function setCarState(\App\Entity\CarState $carState = null)
//    {
//        $this->carState = $carState;
//
//        return $this;
//    }

    /**
     * Get carState.
     *
     * @return \App\Entity\CarState|null
     */
    public function getCarState()
    {
        return $this->carState;
    }

    /**
     * Set dateGrayCard
     *
     * @param date|null $dateGrayCard
     *
     * @return CarDetails
     */
    public function setDateGrayCard($dateGrayCard)
    {
        $this->dateGrayCard = $dateGrayCard;

        return $this;
    }

    /**
     * Get dateGrayCard
     *
     * @return date|null
     */
    public function getDateGrayCard()
    {
        return $this->dateGrayCard;
    }

    /**
     * Set timestamp
     *
     * @param \DateTime $timestamp
     *
     * @return Widget
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;

        return $this;
    }


    /**
     * Get timestamp
     *
     * @return \DateTime
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

}
