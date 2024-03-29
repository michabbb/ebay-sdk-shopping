<?php
/**
 * Copyright 2014 David T. Sadler
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace DTS\eBaySDK\Shopping\Services;

class ShoppingService extends \DTS\eBaySDK\Shopping\Services\ShoppingBaseService
{
    /**
     * @param \DTS\eBaySDK\Interfaces\HttpClientInterface $httpClient The object that will handle sending requests to the API.
     * @param array $config Optional configuration option values. 
     */
    public function __construct(\DTS\eBaySDK\Interfaces\HttpClientInterface $httpClient, $config = array())
    {
        parent::__construct($httpClient, $config);
    }

    /**
     * @param \DTS\eBaySDK\Shopping\Types\FindHalfProductsRequestType $request
     * @return \DTS\eBaySDK\Shopping\Types\FindHalfProductsResponseType
     */
    public function findHalfProducts(\DTS\eBaySDK\Shopping\Types\FindHalfProductsRequestType $request)
    {
        return $this->callOperation(
            'FindHalfProducts',
            $request->toXml('FindHalfProductsRequest', true),
            '\DTS\eBaySDK\Shopping\Types\FindHalfProductsResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Shopping\Types\FindPopularItemsRequestType $request
     * @return \DTS\eBaySDK\Shopping\Types\FindPopularItemsResponseType
     */
    public function findPopularItems(\DTS\eBaySDK\Shopping\Types\FindPopularItemsRequestType $request)
    {
        return $this->callOperation(
            'FindPopularItems',
            $request->toXml('FindPopularItemsRequest', true),
            '\DTS\eBaySDK\Shopping\Types\FindPopularItemsResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Shopping\Types\FindPopularSearchesRequestType $request
     * @return \DTS\eBaySDK\Shopping\Types\FindPopularSearchesResponseType
     */
    public function findPopularSearches(\DTS\eBaySDK\Shopping\Types\FindPopularSearchesRequestType $request)
    {
        return $this->callOperation(
            'FindPopularSearches',
            $request->toXml('FindPopularSearchesRequest', true),
            '\DTS\eBaySDK\Shopping\Types\FindPopularSearchesResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Shopping\Types\FindProductsRequestType $request
     * @return \DTS\eBaySDK\Shopping\Types\FindProductsResponseType
     */
    public function findProducts(\DTS\eBaySDK\Shopping\Types\FindProductsRequestType $request)
    {
        return $this->callOperation(
            'FindProducts',
            $request->toXml('FindProductsRequest', true),
            '\DTS\eBaySDK\Shopping\Types\FindProductsResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Shopping\Types\FindReviewsAndGuidesRequestType $request
     * @return \DTS\eBaySDK\Shopping\Types\FindReviewsAndGuidesResponseType
     */
    public function findReviewsAndGuides(\DTS\eBaySDK\Shopping\Types\FindReviewsAndGuidesRequestType $request)
    {
        return $this->callOperation(
            'FindReviewsAndGuides',
            $request->toXml('FindReviewsAndGuidesRequest', true),
            '\DTS\eBaySDK\Shopping\Types\FindReviewsAndGuidesResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Shopping\Types\GetCategoryInfoRequestType $request
     * @return \DTS\eBaySDK\Shopping\Types\GetCategoryInfoResponseType
     */
    public function getCategoryInfo(\DTS\eBaySDK\Shopping\Types\GetCategoryInfoRequestType $request)
    {
        return $this->callOperation(
            'GetCategoryInfo',
            $request->toXml('GetCategoryInfoRequest', true),
            '\DTS\eBaySDK\Shopping\Types\GetCategoryInfoResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Shopping\Types\GetItemStatusRequestType $request
     * @return \DTS\eBaySDK\Shopping\Types\GetItemStatusResponseType
     */
    public function getItemStatus(\DTS\eBaySDK\Shopping\Types\GetItemStatusRequestType $request)
    {
        return $this->callOperation(
            'GetItemStatus',
            $request->toXml('GetItemStatusRequest', true),
            '\DTS\eBaySDK\Shopping\Types\GetItemStatusResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Shopping\Types\GetMultipleItemsRequestType $request
     * @return \DTS\eBaySDK\Shopping\Types\GetMultipleItemsResponseType
     */
    public function getMultipleItems(\DTS\eBaySDK\Shopping\Types\GetMultipleItemsRequestType $request)
    {
        return $this->callOperation(
            'GetMultipleItems',
            $request->toXml('GetMultipleItemsRequest', true),
            '\DTS\eBaySDK\Shopping\Types\GetMultipleItemsResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Shopping\Types\GetShippingCostsRequestType $request
     * @return \DTS\eBaySDK\Shopping\Types\GetShippingCostsResponseType
     */
    public function getShippingCosts(\DTS\eBaySDK\Shopping\Types\GetShippingCostsRequestType $request)
    {
        return $this->callOperation(
            'GetShippingCosts',
            $request->toXml('GetShippingCostsRequest', true),
            '\DTS\eBaySDK\Shopping\Types\GetShippingCostsResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Shopping\Types\GetSingleItemRequestType $request
     * @return \DTS\eBaySDK\Shopping\Types\GetSingleItemResponseType
     */
    public function getSingleItem(\DTS\eBaySDK\Shopping\Types\GetSingleItemRequestType $request)
    {
        return $this->callOperation(
            'GetSingleItem',
            $request->toXml('GetSingleItemRequest', true),
            '\DTS\eBaySDK\Shopping\Types\GetSingleItemResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Shopping\Types\GetUserProfileRequestType $request
     * @return \DTS\eBaySDK\Shopping\Types\GetUserProfileResponseType
     */
    public function getUserProfile(\DTS\eBaySDK\Shopping\Types\GetUserProfileRequestType $request)
    {
        return $this->callOperation(
            'GetUserProfile',
            $request->toXml('GetUserProfileRequest', true),
            '\DTS\eBaySDK\Shopping\Types\GetUserProfileResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\Shopping\Types\GeteBayTimeRequestType $request
     * @return \DTS\eBaySDK\Shopping\Types\GeteBayTimeResponseType
     */
    public function geteBayTime(\DTS\eBaySDK\Shopping\Types\GeteBayTimeRequestType $request)
    {
        return $this->callOperation(
            'GeteBayTime',
            $request->toXml('GeteBayTimeRequest', true),
            '\DTS\eBaySDK\Shopping\Types\GeteBayTimeResponseType'
        );
    }
}
