<?php

namespace Keboola\Juicer\Pagination;

/**
 * For extractors with no pagination
 */
class NoScroller implements ScrollerInterface
{
	/**
	 * {@inheritdoc}
	 */
	public function getNextPageUrl($response, $data, $endpoint, array $params = null)
	{
		return false;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getNextRequest(ClientInterface $client, JobConfig $jobConfig, $response, $data)
	{
		return false;
	}

	/**
	 * {@inheritdoc}
	 */
	public function reset() {}

	/**
	 * {@inheritdoc}
	 */
	public static function create(array $config) {
		return new self;
	}
}
