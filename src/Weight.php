<?php

namespace Lido\WeightConversions;

class Weight
{
	protected float $kilograms;

	public static function kilograms(float $kilograms)
	{
		return new static($kilograms);
	}

	public function __construct(float $kilograms)
	{
		return $this->kilograms = $kilograms;
	}

	public function toPounds()
	{
		return $this->kilograms * 2.2046;
	}

	public function toStones()
	{
		return $this->kilograms * 0.15747;
	}
}
