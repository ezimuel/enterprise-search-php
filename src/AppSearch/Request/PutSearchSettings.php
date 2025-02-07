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

namespace Elastic\EnterpriseSearch\AppSearch\Request;

use Elastic\EnterpriseSearch\AppSearch\Schema\SearchSettings;
use Elastic\EnterpriseSearch\Request\Request;

/**
 * Update search settings for the engine
 * @internal
 */
class PutSearchSettings extends Request
{
	/**
	 * @param string $engineName Name of the engine
	 * @param SearchSettings $searchSettings Search settings
	 */
	public function __construct(string $engineName, SearchSettings $searchSettings)
	{
		$this->method = 'PUT';
		$engine_name = urlencode($engineName);
		$this->path = "/api/as/v1/engines/$engine_name/search_settings";
		$this->headers['Content-Type'] = 'application/json';
		$this->body = $searchSettings;
	}
}
