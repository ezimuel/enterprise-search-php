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

namespace Elastic\EnterpriseSearch\WorkplaceSearch\Schema;

/**
 * @internal
 */
class AnalyticsEvent
{
	/** @var string */
	public $type;

	/** @var string */
	public $query_id;

	/** @var int */
	public $page;

	/** @var string */
	public $content_source_id;

	/** @var string */
	public $document_id;

	/** @var int */
	public $rank;

	/** @var string */
	public $event;

	/** @var int */
	public $score;


	public function __construct(
		string $type,
		string $query_id,
		int $page,
		string $content_source_id,
		string $document_id,
		int $rank
	) {
		$this->type = $type;
		$this->query_id = $query_id;
		$this->page = $page;
		$this->content_source_id = $content_source_id;
		$this->document_id = $document_id;
		$this->rank = $rank;
	}
}
