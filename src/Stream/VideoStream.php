<?php
/**
 * This file is part of the arhitector/jumper library.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author    Dmitry Arhitector <dmitry.arhitector@yandex.ru>
 *
 * @license   http://opensource.org/licenses/MIT MIT
 * @copyright Copyright (c) 2017 Dmitry Arhitector <dmitry.arhitector@yandex.ru>
 */
namespace Arhitector\Jumper\Stream;

/**
 * Class VideoStream.
 *
 * @package Arhitector\Jumper\Stream
 */
class VideoStream extends FrameStream implements VideoStreamInterface
{
	
	/**
	 * @var float Frame rate.
	 */
	protected $frameRate;
	
	/**
	 * Get frame rate value.
	 *
	 * @return float
	 */
	public function getFrameRate()
	{
		return $this->frameRate;
	}
	
	/**
	 * Set frame rate value.
	 *
	 * @param float $frameRate
	 *
	 * @return VideoStreamInterface
	 * @throws \InvalidArgumentException
	 */
	protected function setFrameRate($frameRate)
	{
		if ( ! is_float($frameRate) || $frameRate < 0)
		{
			throw new \InvalidArgumentException('Wrong frame rate value.');
		}
		
		$this->frameRate = $frameRate;
		
		return $this;
	}
	
}