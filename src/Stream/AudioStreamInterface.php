<?php
/**
 * This file is part of the arhitector/transcoder library.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author    Dmitry Arhitector <dmitry.arhitector@yandex.ru>
 *
 * @license   http://opensource.org/licenses/MIT MIT
 * @copyright Copyright (c) 2017 Dmitry Arhitector <dmitry.arhitector@yandex.ru>
 */
namespace Arhitector\Transcoder\Stream;

/**
 * Interface AudioStreamInterface.
 *
 * @package Arhitector\Transcoder\Stream
 */
interface AudioStreamInterface extends StreamInterface
{
	
	/**
	 * Get channels value.
	 *
	 * @return int
	 */
	public function getChannels();
	
	/**
	 * Get sample rate value.
	 *
	 * @return string
	 */
	public function getFrequency();
	
}
