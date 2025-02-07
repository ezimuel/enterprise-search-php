<?php

/**
 * NOTE: THIS FILE IS AUTO-GENERATED, DO NOT EDIT
 *
 * Elastic Enterprise Search
 *
 * @link      https://github.com/elastic/enterprise-search-php
 * @copyright Copyright (c) Elasticsearch B.V (https://www.elastic.co)
 * @license   http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 *
 * Licensed to Elasticsearch B.V under one or more agreements
 * Elasticsearch B.V licenses this file to you under the Apache 2.0 License
 * See the LICENSE file in the project root for more information
 */

declare(strict_types=1);

namespace Elastic\EnterpriseSearch\EnterpriseSearch\Schema;

/**
 * @internal
 */
class ConnectorPool
{
	/** @var bool */
	public $running;

	/** @var int */
	public $queue_depth;

	/** @var int */
	public $size;

	/** @var int */
	public $busy;

	/** @var int */
	public $idle;

	/** @var int */
	public $total_scheduled;

	/** @var int */
	public $total_completed;


	public function __construct(
		bool $running,
		int $queue_depth,
		int $size,
		int $busy,
		int $idle,
		int $total_scheduled,
		int $total_completed
	) {
		$this->running = $running;
		$this->queue_depth = $queue_depth;
		$this->size = $size;
		$this->busy = $busy;
		$this->idle = $idle;
		$this->total_scheduled = $total_scheduled;
		$this->total_completed = $total_completed;
	}
}
