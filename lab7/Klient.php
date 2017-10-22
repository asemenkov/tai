<?php
/**
 * Created by PhpStorm.
 * User: andrii
 * Date: 22.10.17
 * Time: 21:39
 */

class Klient
{
    private $id;
    private $nazwisko;
    private $wiek;
    private $panstwo;
    private $email;
    private $zamowienie;
    private $platnosc;

    /**
     * Baza constructor.
     * @param $id
     * @param $nazwisko
     * @param $wiek
     * @param $panstwo
     * @param $email
     * @param $zamowienie
     * @param $platnosc
     */
    public function __construct($id, $nazwisko, $wiek, $panstwo, $email, $zamowienie, $platnosc)
    {
        $this->id = $id;
        $this->nazwisko = $nazwisko;
        $this->wiek = $wiek;
        $this->panstwo = $panstwo;
        $this->email = $email;
        $this->zamowienie = $zamowienie;
        $this->platnosc = $platnosc;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNazwisko()
    {
        return $this->nazwisko;
    }

    /**
     * @param mixed $nazwisko
     */
    public function setNazwisko($nazwisko)
    {
        $this->nazwisko = $nazwisko;
    }

    /**
     * @return mixed
     */
    public function getWiek()
    {
        return $this->wiek;
    }

    /**
     * @param mixed $wiek
     */
    public function setWiek($wiek)
    {
        $this->wiek = $wiek;
    }

    /**
     * @return mixed
     */
    public function getPanstwo()
    {
        return $this->panstwo;
    }

    /**
     * @param mixed $panstwo
     */
    public function setPanstwo($panstwo)
    {
        $this->panstwo = $panstwo;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getZamowienie()
    {
        return $this->zamowienie;
    }

    /**
     * @param mixed $zamowienie
     */
    public function setZamowienie($zamowienie)
    {
        $this->zamowienie = $zamowienie;
    }

    /**
     * @return mixed
     */
    public function getPlatnosc()
    {
        return $this->platnosc;
    }

    /**
     * @param mixed $platnosc
     */
    public function setPlatnosc($platnosc)
    {
        $this->platnosc = $platnosc;
    }


}