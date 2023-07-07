<?php

class Cars
{
    private string $brand;
    private int $year;
    private int $kilometers;
    private int $price;
    private string $options;
    private string $images;

    public function __construct(string $brand, int $year, int $kilometers, int $price, string $options, string $images)
    {
        $this->brand = $brand;
        $this->year = $year;
        $this->kilometers = $kilometers;
        $this->price = $price;
        $this->options = $options;
        $this->images = $images;
    }

    public function getBrand(): string
    {
        return $this->brand;
    }

    public function setBrand(string $brand): void
    {
        $this->brand = $brand;
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function setYear(int $year): void
    {
        $this->year = $year;
    }

    public function getKilometers(): int
    {
        return $this->kilometers;
    }

    public function setKilometers(int $kilometers): void
    {
        $this->kilometers = $kilometers;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function setPrice(int $price): void
    {
        $this->price = $price;
    }

    public function getOptions(): string
    {
        return $this->options;
    }

    public function setOptions(string $options): void
    {
        $this->options = $options;
    }

    public function getImages(): string
    {
        return $this->images;
    }

    public function setImages(string $images): void
    {
        $this->images = $images;
    }

}