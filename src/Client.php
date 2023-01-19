<?php

/*
 * This file is part of the package wapplersystems/learnworlds-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace WapplerSystems\LearnWorldsApi;

use Http\Client\Common\Plugin\AddHostPlugin;
use Http\Client\Common\Plugin\AddPathPlugin;
use Http\Client\Common\PluginClient;
use Http\Discovery\Psr17FactoryDiscovery;
use Http\Discovery\Psr18ClientDiscovery;
use Psr\Http\Message\ResponseInterface;
use stdClass;
use Symfony\Component\Serializer\Encoder\JsonDecode;
use Symfony\Component\Serializer\Encoder\JsonEncode;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Serializer;
use WapplerSystems\LearnWorldsApi\Endpoint\DeleteCertificatesId;
use WapplerSystems\LearnWorldsApi\Endpoint\DeleteUsersIdProductEnrollmentPid;
use WapplerSystems\LearnWorldsApi\Endpoint\GetAffiliateLeads;
use WapplerSystems\LearnWorldsApi\Endpoint\GetAffiliates;
use WapplerSystems\LearnWorldsApi\Endpoint\GetAffiliatesIdCustomers;
use WapplerSystems\LearnWorldsApi\Endpoint\GetAffiliatesIdPayments;
use WapplerSystems\LearnWorldsApi\Endpoint\GetAffiliatesIdPayoutsCompleted;
use WapplerSystems\LearnWorldsApi\Endpoint\GetAffiliatesIdPayoutsDue;
use WapplerSystems\LearnWorldsApi\Endpoint\GetAffiliatesIdPayoutsUpcoming;
use WapplerSystems\LearnWorldsApi\Endpoint\GetBundles;
use WapplerSystems\LearnWorldsApi\Endpoint\GetBundlesId;
use WapplerSystems\LearnWorldsApi\Endpoint\GetCertificates;
use WapplerSystems\LearnWorldsApi\Endpoint\GetCouponRedemptions;
use WapplerSystems\LearnWorldsApi\Endpoint\GetCourses;
use WapplerSystems\LearnWorldsApi\Endpoint\GetCoursesCidUnitUidAnalytics;
use WapplerSystems\LearnWorldsApi\Endpoint\GetCoursesId;
use WapplerSystems\LearnWorldsApi\Endpoint\GetCoursesIdAnalytics;
use WapplerSystems\LearnWorldsApi\Endpoint\GetCoursesIdContents;
use WapplerSystems\LearnWorldsApi\Endpoint\GetCoursesIdUsers;
use WapplerSystems\LearnWorldsApi\Endpoint\GetCoursesNameLiveSessions;
use WapplerSystems\LearnWorldsApi\Endpoint\GetEventLogs;
use WapplerSystems\LearnWorldsApi\Endpoint\GetInstallments;
use WapplerSystems\LearnWorldsApi\Endpoint\GetLeads;
use WapplerSystems\LearnWorldsApi\Endpoint\GetPaymentsIdInvoiceLink;
use WapplerSystems\LearnWorldsApi\Endpoint\GetPromotions;
use WapplerSystems\LearnWorldsApi\Endpoint\GetPromotionsId;
use WapplerSystems\LearnWorldsApi\Endpoint\GetQuestionnaireUnitResponses;
use WapplerSystems\LearnWorldsApi\Endpoint\GetSchoolSegments;
use WapplerSystems\LearnWorldsApi\Endpoint\GetSubscriptionPlans;
use WapplerSystems\LearnWorldsApi\Endpoint\GetSubscriptionPlansId;
use WapplerSystems\LearnWorldsApi\Endpoint\GetTransactions;
use WapplerSystems\LearnWorldsApi\Endpoint\GetTransactionsId;
use WapplerSystems\LearnWorldsApi\Endpoint\GetUserIdProducts;
use WapplerSystems\LearnWorldsApi\Endpoint\GetUsers;
use WapplerSystems\LearnWorldsApi\Endpoint\GetUsersByProduct;
use WapplerSystems\LearnWorldsApi\Endpoint\GetUsersBySegment;
use WapplerSystems\LearnWorldsApi\Endpoint\GetUsersId;
use WapplerSystems\LearnWorldsApi\Endpoint\GetUsersIdCourses;
use WapplerSystems\LearnWorldsApi\Endpoint\GetUsersIdCoursesCidProgress;
use WapplerSystems\LearnWorldsApi\Endpoint\GetUserSubscriptions;
use WapplerSystems\LearnWorldsApi\Endpoint\GetV2CoursesIdGrades;
use WapplerSystems\LearnWorldsApi\Endpoint\GetV2UsersIdProgress;
use WapplerSystems\LearnWorldsApi\Endpoint\PostAffiliatesId;
use WapplerSystems\LearnWorldsApi\Endpoint\PostCourses;
use WapplerSystems\LearnWorldsApi\Endpoint\PostCoursesIdSections;
use WapplerSystems\LearnWorldsApi\Endpoint\PostPromotions;
use WapplerSystems\LearnWorldsApi\Endpoint\PostPromotionsIdCouponsBulk;
use WapplerSystems\LearnWorldsApi\Endpoint\PostPromotionsPidCoupons;
use WapplerSystems\LearnWorldsApi\Endpoint\PostUsers;
use WapplerSystems\LearnWorldsApi\Endpoint\PostUsersIdProductEnrollmentPid;
use WapplerSystems\LearnWorldsApi\Endpoint\PutCertificatesId;
use WapplerSystems\LearnWorldsApi\Endpoint\PutCoursesId;
use WapplerSystems\LearnWorldsApi\Endpoint\PutUsersId;
use WapplerSystems\LearnWorldsApi\Endpoint\PutUsersIdSuspend;
use WapplerSystems\LearnWorldsApi\Endpoint\PutUsersIdTags;
use WapplerSystems\LearnWorldsApi\Endpoint\PutUsersIdUnsuspend;
use WapplerSystems\LearnWorldsApi\Model\Affiliate;
use WapplerSystems\LearnWorldsApi\Model\AffiliatePostRequest;
use WapplerSystems\LearnWorldsApi\Model\Bundle;
use WapplerSystems\LearnWorldsApi\Model\Certificate;
use WapplerSystems\LearnWorldsApi\Model\CertificateUpdate;
use WapplerSystems\LearnWorldsApi\Model\Coupon;
use WapplerSystems\LearnWorldsApi\Model\CouponUsage;
use WapplerSystems\LearnWorldsApi\Model\Course;
use WapplerSystems\LearnWorldsApi\Model\CourseAnalytics;
use WapplerSystems\LearnWorldsApi\Model\CourseContent;
use WapplerSystems\LearnWorldsApi\Model\Payment;
use WapplerSystems\LearnWorldsApi\Model\SubscriptionPlan;
use WapplerSystems\LearnWorldsApi\Model\UnitAnalytics;
use WapplerSystems\LearnWorldsApi\Model\User;
use WapplerSystems\LearnWorldsApi\Model\UserProgress;
use WapplerSystems\LearnWorldsApi\Model\UserRequestModel;
use WapplerSystems\LearnWorldsApi\Model\UserRequestPutModel;
use WapplerSystems\LearnWorldsApi\Model\V2AffiliatesGetResponse200;
use WapplerSystems\LearnWorldsApi\Model\V2AffiliatesIdCustomersGetResponse200;
use WapplerSystems\LearnWorldsApi\Model\V2AffiliatesIdLeadsGetResponse200;
use WapplerSystems\LearnWorldsApi\Model\V2AffiliatesIdPaymentsGetResponse200;
use WapplerSystems\LearnWorldsApi\Model\V2AffiliatesIdPayoutsCompletedGetResponse200;
use WapplerSystems\LearnWorldsApi\Model\V2AffiliatesIdPayoutsDueGetResponse200;
use WapplerSystems\LearnWorldsApi\Model\V2AffiliatesIdPayoutsUpcomingGetResponse200;
use WapplerSystems\LearnWorldsApi\Model\V2AssessmentsIdResponsesGetResponse200;
use WapplerSystems\LearnWorldsApi\Model\V2BundlesGetResponse200;
use WapplerSystems\LearnWorldsApi\Model\V2CertificatesGetResponse200;
use WapplerSystems\LearnWorldsApi\Model\V2CoursesGetResponse200;
use WapplerSystems\LearnWorldsApi\Model\V2CoursesIdGradesGetResponse200;
use WapplerSystems\LearnWorldsApi\Model\V2CoursesIdPutBody;
use WapplerSystems\LearnWorldsApi\Model\V2CoursesIdUsersGetResponse200;
use WapplerSystems\LearnWorldsApi\Model\V2CoursesPostBody;
use WapplerSystems\LearnWorldsApi\Model\V2EventLogsGetResponse200;
use WapplerSystems\LearnWorldsApi\Model\V2InstallmentsActiveGetResponse200;
use WapplerSystems\LearnWorldsApi\Model\V2LeadsGetResponse200;
use WapplerSystems\LearnWorldsApi\Model\V2PaymentsGetResponse200;
use WapplerSystems\LearnWorldsApi\Model\V2PaymentsIdInvoiceLinkGetResponse200;
use WapplerSystems\LearnWorldsApi\Model\V2PromotionsGetResponse200;
use WapplerSystems\LearnWorldsApi\Model\V2PromotionsIdCouponsBulkPostBody;
use WapplerSystems\LearnWorldsApi\Model\V2PromotionsPidCouponsGetResponse200;
use WapplerSystems\LearnWorldsApi\Model\V2PromotionsPidCouponsPostBody;
use WapplerSystems\LearnWorldsApi\Model\V2PromotionsPostBody;
use WapplerSystems\LearnWorldsApi\Model\V2PromotionsPostResponse201;
use WapplerSystems\LearnWorldsApi\Model\V2SchoolEventsGetResponse200;
use WapplerSystems\LearnWorldsApi\Model\V2SubscriptionPlansGetResponse200;
use WapplerSystems\LearnWorldsApi\Model\V2UsersByProductGetResponse200;
use WapplerSystems\LearnWorldsApi\Model\V2UsersBySegmentGetResponse200;
use WapplerSystems\LearnWorldsApi\Model\V2UsersGetResponse200;
use WapplerSystems\LearnWorldsApi\Model\V2UsersIdCoursesGetResponse200;
use WapplerSystems\LearnWorldsApi\Model\V2UsersIdEnrollmentDeleteBody;
use WapplerSystems\LearnWorldsApi\Model\V2UsersIdEnrollmentPostBody;
use WapplerSystems\LearnWorldsApi\Model\V2UsersIdEnrollmentPostResponse200;
use WapplerSystems\LearnWorldsApi\Model\V2UsersIdProductsGetResponse200;
use WapplerSystems\LearnWorldsApi\Model\V2UsersIdProgressGetResponse200;
use WapplerSystems\LearnWorldsApi\Model\V2UsersIdTagsPutBody;
use WapplerSystems\LearnWorldsApi\Model\V2UsersSegmentsGetResponse200;
use WapplerSystems\LearnWorldsApi\Model\V2UserSubscriptionsGetResponse200;
use WapplerSystems\LearnWorldsApi\Normalizer\JaneObjectNormalizer;

class Client extends Runtime\Client\Client
{
    /**
     * Returns a list of all courses of the school. The courses are in sorted order, with the most recently created course appearing first, and the list is paginated, with a limit of 50 courses per page.
     *
     * @param array $queryParameters {
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|V2CoursesGetResponse200|ResponseInterface
     * @var string $Lw-Client The school Client ID
     * @var string $Authorization The Bearer token
     * }
     * @var int $page Filter by the page number. In case page number is higher than the maximum one, the results of last page will be returned
     * }
     * @var string $categories Comma seperated names of categories
     */
    public function getCourses(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetCourses($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Creates a new course. The endpoint response is the created Course resource.
     *
     * @param null|V2CoursesPostBody $requestBody
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Course|ResponseInterface
     * @var string $Lw-Client The school Client ID
     * }
     * @var string $Accept application/json
     * @var string $Authorization The Bearer token
     */
    public function postCourses(?V2CoursesPostBody $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new PostCourses($requestBody, $headerParameters), $fetch);
    }

    /**
     * Returns information about the course specified by the provided course id.
     *
     * @param string $id Unique identifier of the course
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Course|ResponseInterface
     * @var string $Authorization The Bearer token
     * @var string $Lw-Client The school Client ID
     * }
     */
    public function getCoursesId(string $id, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetCoursesId($id, $headerParameters), $fetch);
    }

    /**
     * Updates the course specified by the provided course id. The endpoint response is the updated Course resource.
     *
     * @param string $id Unique identifier of the course
     * @param null|V2CoursesIdPutBody $requestBody
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Course|ResponseInterface
     * @var string $Authorization The Bearer token
     * @var string $Lw-Client The school Client ID
     * }
     */
    public function putCoursesId(string $id, ?V2CoursesIdPutBody $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new PutCoursesId($id, $requestBody, $headerParameters), $fetch);
    }

    /**
     * Returns analytics about the course specified by the provided course id.
     *
     * @param string $id Course Id
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|CourseAnalytics|ResponseInterface
     * @var string $Authorization The Bearer token
     * @var string $Lw-Client The school Client ID
     * }
     */
    public function getCoursesIdAnalytics(string $id, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetCoursesIdAnalytics($id, $headerParameters), $fetch);
    }

    /**
     * Returns analytics about a learning activity of a course specified by the provided course id and learning activity id.
     *
     * @param string $id Course title Id
     * @param string $uid Learning activity id
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|UnitAnalytics|ResponseInterface
     * @var string $Authorization The Bearer token
     * @var string $Lw-Client The school Client ID
     * }
     */
    public function getCoursesCidUnitUidAnalytics(string $id, string $uid, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetCoursesCidUnitUidAnalytics($id, $uid, $headerParameters), $fetch);
    }

    /**
     * Returns a list of all bundles of the school. The bundles are in sorted order, with the most recently created bundle appearing first, and the list is paginated, with a limit of 20 bundles per page.
     *
     * @param array $queryParameters {
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|V2BundlesGetResponse200|ResponseInterface
     * @var string $Lw-Client The school Client ID
     * }
     * @var int $page Filter by the page number. In case page number is higher than the maximum one, the results of last page will be returned
     * }
     * @var string $Authorization The Bearer token
     */
    public function getBundles(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetBundles($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Returns the bundle specified by the provided bundle id.
     *
     * @param string $id Unique identifier of the bundle
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Bundle|ResponseInterface
     * @var string $Authorization The Bearer token
     * @var string $Lw-Client The school Client ID
     * }
     */
    public function getBundlesId(string $id, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetBundlesId($id, $headerParameters), $fetch);
    }

    /**
     * Returns a list of all subscription plans. The subscription plans are in sorted order, with the most recently created subscription plan appearing first, and the list is paginated, with a limit of 50 subscription plans per page.
     *
     * @param array $queryParameters {
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|V2SubscriptionPlansGetResponse200|ResponseInterface
     * @var string $Lw-Client The school Client ID
     * }
     * @var int $page Filter by the page number. In case page number is higher than the maximum one, the results of last page will be returned
     * }
     * @var string $Authorization The Bearer token
     */
    public function getSubscriptionPlans(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetSubscriptionPlans($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Returns the subscription plan specified by the provided subscription plan id.
     *
     * @param string $id Subscription plan Id
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|SubscriptionPlan|ResponseInterface
     * @var string $Authorization The Bearer token
     * @var string $Lw-Client The school Client ID
     * }
     */
    public function getSubscriptionPlansId(string $id, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetSubscriptionPlansId($id, $headerParameters), $fetch);
    }

    /**
     * Returns a list with the user subscriptions. The subscriptions are in sorted order based on user's creation date in descending order and the list is paginated, with a limit of 20 subscriptions per page. To refine the list of subscriptions, there are a number of query params outlined in the following section; In case more than one Query param is provided, then all of them will be applied (AND operator).
     *
     * @param array $queryParameters {
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|V2UserSubscriptionsGetResponse200|ResponseInterface
     * @var string $user_id Filter by user id or email (url encoded string)
     * @var string $Authorization The Bearer token
     * @var string $Lw-Client The school Client ID
     * }
     * @var string $status Filter by subscription status
     * @var int $page Filter by the page number. In case page number is higher than the maximum one, the results of last page will be returned
     * }
     */
    public function getUserSubscriptions(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetUserSubscriptions($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Return a list with active installments of users. The installments are in sorted order based on user's creation date in descending order, and the list is paginated, with a limit of 50 installments per page. To refine the list of installments, there are a number of query params outlined in the following section; In case more than one Query param is provided, then all of them will be applied (AND operator).
     *
     * @param array $queryParameters {
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|V2InstallmentsActiveGetResponse200|ResponseInterface
     * @var string $product_id Filter by product Id
     * @var string $user_id Filter by a user id or email (url encoded string)
     * @var string $product_type Filter by product type
     * @var int $page Filter by the page number. In case page number is higher than the maximum one, no results will be returned
     * }
     * @var string $Authorization The Bearer token
     * @var string $Lw-Client The school Client ID
     * }
     */
    public function getInstallments(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetInstallments($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Returns all the upcoming scheduled school events, regarding course drip feed, file assignment and live session.
     *
     * @param array $queryParameters {
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|V2SchoolEventsGetResponse200|ResponseInterface
     * @var string $Lw-Client The school Client ID
     * }
     * @var string $event_type Filter by event type
     * }
     * @var string $Authorization The Bearer token
     */
    public function getCoursesNameLiveSessions(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetCoursesNameLiveSessions($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Returns a list with all the users of the school. The users are in sorted order, with the most recently created user appearing first, and the list is paginated, with a default limit of 20 users per page.
     * To refine the list of users, there are a number of query params outlined in the following section; In case more than one Query param is provided, then all of them will be applied (AND operator).
     *
     * @param array $queryParameters {
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|V2UsersGetResponse200|ResponseInterface
     * @var float $registration_after Filter by registration after the given datetime (expected in UNIX timestamp format)
     * @var string $status Filter by user status
     * @var string $role Filter by user role
     * @var string $tags Filter by tags. For several tag values, a comma separated string can be provided.
     * @var int $page Filter by the page number. In case page number is higher than the maximum one, the results of last page will be returned
     * @var string $cf_ $field_name Filter by custom field. All custom fields start with the cf_ prefix; the "$field_name" part should be replaced by the name of the corresponding custom field. Also, it is possible to use more than one custom fields as filters, using the aforementioned convention.
     * @var float $registration_before Filter by registration before the given datetime (expected in UNIX timestamp format)
     * @var int $items_per_page Filter by the items per page number
     * @var string $include_suspended Filter by include_suspended flag. The default value is false.
     * }
     * @var string $Lw-Client The school Client ID
     * @var string $Authorization The Bearer token
     * }
     */
    public function getUsers(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetUsers($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Creates a new user. The endpoint response is the created User resource.
     *
     * @param null|UserRequestModel $requestBody
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|User|ResponseInterface
     * @var string $Authorization The Bearer token
     * @var string $Lw-Client The school Client ID
     * }
     */
    public function postUsers(?UserRequestModel $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new PostUsers($requestBody, $headerParameters), $fetch);
    }

    /**
     * Returns the user specified by the provided user id.
     *
     * @param string $id User Id or email (encoded string)
     * @param array $queryParameters {
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|User|ResponseInterface
     * @var string $Lw-Client The school Client ID
     * }
     * @var string $include_suspended Filter by include_suspended flag. The default value is false.
     * }
     * @var string $Authorization The Bearer token
     */
    public function getUsersId(string $id, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetUsersId($id, $queryParameters, $headerParameters), $fetch);
    }

    /**
     * Updates user information. The endpoint response is the updated User resource.
     *
     * @param string $id User Id or email (encoded string)
     * @param null|UserRequestPutModel $requestBody
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|User|ResponseInterface
     * @var string $Authorization The Bearer token
     * @var string $Lw-Client The school Client ID
     * }
     */
    public function putUsersId(string $id, ?UserRequestPutModel $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new PutUsersId($id, $requestBody, $headerParameters), $fetch);
    }

    /**
     * Returns a list with all course enrollment data of the specified user. The list is paginated, with a limit of 50 course enrollments per page.
     *
     * @param string $id User Id or email (encoded string)
     * @param array $queryParameters {
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|V2UsersIdCoursesGetResponse200|ResponseInterface
     * @var string $Lw-Client The school Client ID
     * }
     * @var int $page Filter by the page number. In case page number is higher than the maximum one, the results of last page will be returned
     * }
     * @var string $Authorization The Bearer token
     */
    public function getUsersIdCourses(string $id, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetUsersIdCourses($id, $queryParameters, $headerParameters), $fetch);
    }

    /**
     * Retrieves all the users enrolled in the course specified by the provided course id. The users are in sorted order, with the most recently created user appearing first, and the list is paginated, with a default limit of 20 users per page.
     *
     * @param string $id Course id
     * @param array $queryParameters {
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|V2CoursesIdUsersGetResponse200|ResponseInterface
     * @var string $Authorization The Bearer token
     * @var string $Lw-Client The school Client ID
     * }
     * @var int $items_per_page Filter by the items per page number
     * }
     * @var int $page Filter by the page number. In case page number is higher than the maximum one, the results of last page will be returned
     */
    public function getCoursesIdUsers(string $id, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetCoursesIdUsers($id, $queryParameters, $headerParameters), $fetch);
    }

    /**
     * Creates a new course section in the course, specified by the course id. The endpoint response is the course contents including the newly created section.
     *
     * @param string $id Course Id
     * @param null|stdClass $requestBody
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|CourseContent|ResponseInterface
     * @var string $Authorization The Bearer token
     * @var string $Lw-Client The school Client ID
     * }
     */
    public function postCoursesIdSections(string $id, ?stdClass $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new PostCoursesIdSections($id, $requestBody, $headerParameters), $fetch);
    }

    /**
     * Returns a list with all the payments. The payments are in sorted order, with the most recently created payment appearing first, and the list is paginated, with a default limit of 50 payments per page. To refine the list of payments, there are a number of query params outlined in the following section; In case more than one Query param is provided, then all of them will be applied (AND operator).
     *
     * @param array $queryParameters {
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|V2PaymentsGetResponse200|ResponseInterface
     * @var string $product_type Filter by product type
     * @var string $user_id Filter by user id or email (encoded string)
     * @var string $affiliate_id Filter by affiliate id or email (encoded string)
     * @var string $product_id Filter by product id
     * @var int $page Filter by the page number. In case page number is higher than the maximum one, the results of last page will be returned
     * @var int $items_per_page Filter by the items per page number
     * }
     * @var string $Authorization The Bearer token
     * @var string $Lw-Client The school Client ID
     * }
     */
    public function getTransactions(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetTransactions($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Returns information about the payment specified by the provided payment id.
     *
     * @param string $id Payment Id or Transaction id
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Payment|ResponseInterface
     * @var string $Authorization The Bearer token
     * @var string $Lw-Client The school Client ID
     * }
     */
    public function getTransactionsId(string $id, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetTransactionsId($id, $headerParameters), $fetch);
    }

    /**
     * Returns the contents of the course specified by the provided course id. Includes sections and learning activities.
     *
     * @param string $id Course title Id
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|CourseContent|ResponseInterface
     * @var string $Authorization The Bearer token
     * @var string $Lw-Client The school Client ID
     * }
     */
    public function getCoursesIdContents(string $id, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetCoursesIdContents($id, $headerParameters), $fetch);
    }

    /**
     * Returns a list with all the leads of the school. The leads are in sorted order, with the most recently created leads appearing first, and the list is paginated, with a limit of 20 leads per page.
     *
     * @param array $queryParameters {
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|V2LeadsGetResponse200|ResponseInterface
     * @var string $Lw-Client The school Client ID
     * }
     * @var int $page Filter by the page number. In case page number is higher than the maximum one, the results of last page will be returned
     * }
     * @var string $Authorization The Bearer token
     */
    public function getLeads(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetLeads($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Returns a list with all the products of the user specified by the provided user id.
     *
     * @param string $id User id or email
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|V2UsersIdProductsGetResponse200|ResponseInterface
     * @var string $Authorization The Bearer token
     * @var string $Lw-Client The school Client ID
     * }
     */
    public function getUserIdProducts(string $id, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetUserIdProducts($id, $headerParameters), $fetch);
    }

    /**
     * Updates the tags of the user specified by the provided user Id or email. The endpoint response is the updated User resource.
     *
     * @param string $id User Id or email (encoded string)
     * @param null|V2UsersIdTagsPutBody $requestBody
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|User|ResponseInterface
     * @var string $Authorization The Bearer token
     * @var string $Lw-Client The school Client ID
     * }
     */
    public function putUsersIdTags(string $id, ?V2UsersIdTagsPutBody $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new PutUsersIdTags($id, $requestBody, $headerParameters), $fetch);
    }

    /**
     * Returns all coupons for the promotion specified by the provided promotion id.
     *
     * @param string $pid Promotion Id
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|V2PromotionsPidCouponsGetResponse200|ResponseInterface
     * @var string $Authorization The Bearer token
     * @var string $Lw-Client The school Client ID
     * }
     */
    public function getPromotionsId(string $pid, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetPromotionsId($pid, $headerParameters), $fetch);
    }

    /**
     * Creates a coupon for the promotion specified by the provided promotion id. The endpoint response is the created coupon resource.
     *
     * @param string $pid Promotion Id
     * @param null|V2PromotionsPidCouponsPostBody $requestBody
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Coupon|ResponseInterface
     * @var string $Lw-Client The school Client ID
     * }
     * @var string $Content-Type application/json
     * @var string $Authorization The Bearer token
     */
    public function postPromotionsPidCoupons(string $pid, ?V2PromotionsPidCouponsPostBody $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new PostPromotionsPidCoupons($pid, $requestBody, $headerParameters), $fetch);
    }

    /**
     * Returns information about the coupon specified by the provided promotion id and coupon code. More specifically, the coupon usage details are listed along with the asocciated payments.The payments are in sorted order, with the most recently created payment appearing first, and the list is paginated, with a limit of 50 payments per page.
     *
     * @param string $pid Promotion Id
     * @param string $cid Coupon code
     * @param array $queryParameters {
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|CouponUsage|ResponseInterface
     * @var string $Lw-Client The school Client ID
     * }
     * @var int $page Filter by the page number. In case page number is higher than the maximum one, the results of last page will be returned
     * }
     * @var string $Authorization The Bearer token
     */
    public function getCouponRedemptions(string $pid, string $cid, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetCouponRedemptions($pid, $cid, $queryParameters, $headerParameters), $fetch);
    }

    /**
     * Unenroll user from a product specified by the provided product id
     *
     * @param string $id User Id or email (encoded string)
     * @param null|V2UsersIdEnrollmentDeleteBody $requestBody
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|ResponseInterface
     * @var string $Authorization The Bearer token
     * @var string $Lw-Client The school Client ID
     * }
     */
    public function deleteUsersIdProductEnrollmentPid(string $id, ?V2UsersIdEnrollmentDeleteBody $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT): ?\Psr\Http\Message\ResponseInterface
    {
        return $this->executeEndpoint(new DeleteUsersIdProductEnrollmentPid($id, $requestBody, $headerParameters), $fetch);
    }

    /**
     * Enroll user to product, regarding course, bundle, manual subscription
     *
     * @param string $id User Id or email (encoded string)
     * @param null|V2UsersIdEnrollmentPostBody $requestBody
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|V2UsersIdEnrollmentPostResponse200|ResponseInterface
     * @var string $Authorization The Bearer token
     * @var string $Lw-Client The school Client ID
     * }
     */
    public function postUsersIdProductEnrollmentPid(string $id, ?V2UsersIdEnrollmentPostBody $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new PostUsersIdProductEnrollmentPid($id, $requestBody, $headerParameters), $fetch);
    }

    /**
     * Returns a list with all the affiliates of the school. The affiliates are in sorted order, with the most recently created affiliate appearing first, and the list is paginated, with a limit of 20 affiliates per page.
     *
     * @param array $queryParameters {
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|V2AffiliatesGetResponse200|ResponseInterface
     * @var string $Lw-Client The school Client ID
     * }
     * @var int $page Filter by the page number. In case page number is higher than the maximum one, the results of last page will be returned
     * }
     * @var string $Authorization The Bearer token
     */
    public function getAffiliates(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetAffiliates($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Retrieves all the leads connected with the affiliate specified by the provided affiliate id. The leads are in sorted order, with the most recently created lead appearing first, and the list is paginated, with a limit of 20 leads per page.
     *
     * @param string $id Affiliate Id or email (encoded string)
     * @param array $queryParameters {
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|V2AffiliatesIdLeadsGetResponse200|ResponseInterface
     * @var string $Lw-Client The school Client ID
     * }
     * @var int $page Filter by the page number. In case page number is higher than the maximum one, the results of last page will be returned
     * }
     * @var string $Authorization The Bearer token
     */
    public function getAffiliateLeads(string $id, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetAffiliateLeads($id, $queryParameters, $headerParameters), $fetch);
    }

    /**
     * Deletes the certificate specified by the provided certificate id.
     *
     * @param string $id Certificate Id
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|ResponseInterface
     * @var string $Authorization The Bearer token
     * @var string $Lw-Client The school Client ID
     * }
     */
    public function deleteCertificatesId(string $id, array $headerParameters = [], string $fetch = self::FETCH_OBJECT): ?\Psr\Http\Message\ResponseInterface
    {
        return $this->executeEndpoint(new DeleteCertificatesId($id, $headerParameters), $fetch);
    }

    /**
     * Updates the certificate specified by the provided certificate id.
     *
     * @param string $id Certificate Id
     * @param null|CertificateUpdate $requestBody
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Certificate|ResponseInterface
     * @var string $Authorization The Bearer token
     * @var string $Lw-Client The school Client ID
     * }
     */
    public function putCertificatesId(string $id, ?CertificateUpdate $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new PutCertificatesId($id, $requestBody, $headerParameters), $fetch);
    }

    /**
     * Returns a list with all the promotions of the school. The promotions are in sorted order, with the most recently created promotion appearing first, and the list is paginated, with a limit of 20 promotions per page.
     *
     * @param array $queryParameters {
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|V2PromotionsGetResponse200|ResponseInterface
     * @var string $Lw-Client The school Client ID
     * }
     * @var int $page Filter by the page number. In case page number is higher than the maximum one, the results of last page will be returned
     * }
     * @var string $Authorization The Bearer token
     */
    public function getPromotions(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetPromotions($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Create a new Promotion without coupons. The endpoint response is the created Promotion resource.
     *
     * @param null|V2PromotionsPostBody $requestBody
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|V2PromotionsPostResponse201|ResponseInterface
     * @var string $Authorization The Bearer token
     * @var string $Lw-Client The school Client ID
     * }
     */
    public function postPromotions(?V2PromotionsPostBody $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new PostPromotions($requestBody, $headerParameters), $fetch);
    }

    /**
     * Retrieves all the customers connected with the affiliate specified by the provided affiliate id. The customers are in sorted order, with the most recently created customer appearing first, and the list is paginated, with a limit of 20 customers per page.
     *
     * @param string $id Affiliate Id or email (encoded string)
     * @param array $queryParameters {
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|V2AffiliatesIdCustomersGetResponse200|ResponseInterface
     * @var string $Lw-Client The school Client ID
     * }
     * @var int $page Filter by the page number. In case page number is higher than the maximum one, the results of last page will be returned
     * }
     * @var string $Authorization The Bearer token
     */
    public function getAffiliatesIdCustomers(string $id, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetAffiliatesIdCustomers($id, $queryParameters, $headerParameters), $fetch);
    }

    /**
     * Returns a list with all the affiliate payments. The payments are in sorted order, with the most recently created payment appearing first, and the list is paginated, with a limit of 50 payments per page. To refine the list of payments, there are a number of query params outlined in the following section; In case more than one Query param is provided, then all of them will be applied (AND operator).
     *
     * @param string $id Affiliate Id or email (encoded string)
     * @param array $queryParameters {
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|V2AffiliatesIdPaymentsGetResponse200|ResponseInterface
     * @var string $Lw-Client The school Client ID
     * }
     * @var int $page Filter by the page number. In case page number is higher than the maximum one, the results of last page will be returned
     * }
     * @var string $Authorization The Bearer token
     */
    public function getAffiliatesIdPayments(string $id, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetAffiliatesIdPayments($id, $queryParameters, $headerParameters), $fetch);
    }

    /**
     * Returns the invoice number and a private expiring link to acccess the invoice.
     *
     * @param string $id Payment Id or Transaction id
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|V2PaymentsIdInvoiceLinkGetResponse200|ResponseInterface
     * @var string $Authorization The Bearer token
     * @var string $Lw-Client The school Client ID
     * }
     */
    public function getPaymentsIdInvoiceLink(string $id, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetPaymentsIdInvoiceLink($id, $headerParameters), $fetch);
    }

    /**
     * Returns information about the user progress for the user and course specified by the provided user id and course id. The result also includes the breakdown of user progress data per learning activity.
     *
     * @param string $id User Id or email (encoded string)
     * @param string $cid Course title Id
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|UserProgress|ResponseInterface
     * @var string $Authorization The Bearer token
     * @var string $Lw-Client The school Client ID
     * }
     */
    public function getUsersIdCoursesCidProgress(string $id, string $cid, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetUsersIdCoursesCidProgress($id, $cid, $headerParameters), $fetch);
    }

    /**
     * Returns a list of all user segments in the school.
     *
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|V2UsersSegmentsGetResponse200|ResponseInterface
     * @var string $Authorization The Bearer token
     * @var string $Lw-Client The school Client ID
     * }
     */
    public function getSchoolSegments(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetSchoolSegments($headerParameters), $fetch);
    }

    /**
     * Suspends a user from loging in or creating another account. The endpoint response is the suspended User resource.
     *
     * @param string $id User id or email (encoded string)
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|User|ResponseInterface
     * @var string $Authorization The Bearer token
     * @var string $Lw-Client The school Client ID
     * }
     */
    public function putUsersIdSuspend(string $id, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new PutUsersIdSuspend($id, $headerParameters), $fetch);
    }

    /**
     * Unsuspends a user. The endpoint response is the unsuspended User resource.
     *
     * @param string $id User id or email (encoded string)
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|User|ResponseInterface
     * @var string $Authorization The Bearer token
     * @var string $Lw-Client The school Client ID
     * }
     */
    public function putUsersIdUnsuspend(string $id, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new PutUsersIdUnsuspend($id, $headerParameters), $fetch);
    }

    /**
     * Returns a list with certificates. The certificates are in sorted order, with the most recently created user appearing first, and the list is paginated, with a limit of 20 certificates per page. To refine the list of certificates, there are a number of query params outlined in the following section; In case more than one Query param is provided, then all of them will be applied (AND operator). At least one query parameter is required.
     *
     * @param array $queryParameters {
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|V2CertificatesGetResponse200|ResponseInterface
     * @var string $Authorization The Bearer token
     * @var string $Lw-Client The school Client ID
     * }
     * @var string $user_id Filter by user id or email
     * }
     * @var string $course_id Filter by course title id
     */
    public function getCertificates(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetCertificates($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Retrieves all the users in the segment specified by the provided segment id. The users are in sorted order, with the most recently created user appearing first, and the list is paginated, with a limit of 20 user per page.
     *
     * @param array $queryParameters {
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|V2UsersBySegmentGetResponse200|ResponseInterface
     * @var string $Authorization The Bearer token
     * @var string $Lw-Client The school Client ID
     * }
     * @var int $page Filter by the page number. In case page number is higher than the maximum one, no results will be returned
     * }
     * @var string $segment_id Filter by segment id
     */
    public function getUsersBySegment(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetUsersBySegment($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Retrieves all the users with access to the product specified by the provided product id. The users are in sorted order, with the most recently created user appearing first, and the list is paginated, with a limit of 20 users per page.
     *
     * @param array $queryParameters {
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|V2UsersByProductGetResponse200|ResponseInterface
     * @var string $product_id Filter by product title Id
     * @var string $Authorization The Bearer token
     * @var string $Lw-Client The school Client ID
     * }
     * @var string $product_type Filter by product type
     * @var int $page Filter by the page number. In case page number is higher than the maximum one, the results of last page will be returned
     * }
     */
    public function getUsersByProduct(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetUsersByProduct($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Returns the upcoming payouts specified by the provided affiliate id
     *
     * @param string $id Affiliate Id or email (encoded string)
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|V2AffiliatesIdPayoutsUpcomingGetResponse200|ResponseInterface
     * @var string $Authorization The Bearer token
     * @var string $Lw-Client The school Client ID
     * }
     */
    public function getAffiliatesIdPayoutsUpcoming(string $id, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetAffiliatesIdPayoutsUpcoming($id, $headerParameters), $fetch);
    }

    /**
     * Returns the due payouts related to the provided affiliate
     *
     * @param string $id Affiliate Id or email (encoded string)
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|V2AffiliatesIdPayoutsDueGetResponse200|ResponseInterface
     * @var string $Authorization The Bearer token
     * @var string $Lw-Client The school Client ID
     * }
     */
    public function getAffiliatesIdPayoutsDue(string $id, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetAffiliatesIdPayoutsDue($id, $headerParameters), $fetch);
    }

    /**
     * Returns a list with all the completed payouts related to the provided affiliate. The payouts are in sorted order, with the most recently created payouts appearing first, and the list is paginated, with a limit of 20 payouts per page.
     *
     * @param string $id Affiliate Id or email (encoded string)
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|V2AffiliatesIdPayoutsCompletedGetResponse200|ResponseInterface
     * @var string $Authorization The Bearer token
     * @var string $Lw-Client The school Client ID
     * }
     */
    public function getAffiliatesIdPayoutsCompleted(string $id, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetAffiliatesIdPayoutsCompleted($id, $headerParameters), $fetch);
    }

    /**
     * Bulk create coupons in a promotion. The endpoint response is an array with the created coupon resources.
     *
     * @param string $id Promotion id
     * @param null|V2PromotionsIdCouponsBulkPostBody $requestBody
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Coupon[]|ResponseInterface
     * @var string $Authorization The Bearer token
     * @var string $Lw-Client The school Client ID
     * }
     */
    public function postPromotionsIdCouponsBulk(string $id, ?V2PromotionsIdCouponsBulkPostBody $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new PostPromotionsIdCouponsBulk($id, $requestBody, $headerParameters), $fetch);
    }

    /**
     * Returns a list with all event logs of the school. The list is paginated, with a limit of 50 event logs per page. To refine the list of event logs, there are a number of query params outlined in the following section; In case more than one Query param is provided, then all of them will be applied (AND operator).
     *
     * @param array $queryParameters {
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|V2EventLogsGetResponse200|ResponseInterface
     * @var string $user_id Filter by user id or email (encoded string)
     * @var string $activity Filter by activity name. If no activity is selected all will be applied.
     * @var string $created_after Filter by event log creation after the given datetime (expected in UNIX timestamp format)
     * @var string $created_before Filter by event log creation before the given datetime (expected in UNIX timestamp format)
     * @var int $page Filter by the page number. In case page number is higher than the maximum one, the results of last page will be returned
     * @var string $sort Sort by creation timestamp in ascending or descending order.
     * }
     * @var string $Lw-Client The school Client ID
     * @var string $Authorization The Bearer token
     * }
     */
    public function getEventLogs(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetEventLogs($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Makes a user specified by the provided user id an affiliate. The endpoint response is the affiliate resource.
     *
     * @param string $id User Id or email (encoded string)
     * @param null|AffiliatePostRequest $requestBody
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Affiliate|ResponseInterface
     * @var string $Authorization The Bearer token
     * @var string $Lw-Client The school Client ID
     * }
     */
    public function postAffiliatesId(string $id, ?AffiliatePostRequest $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new PostAffiliatesId($id, $requestBody, $headerParameters), $fetch);
    }

    /**
     * Returns information about the user progress, for the user specified by the provided user id, for all courses the user is enrolled in. The result also includes the breakdown of user progress data per learning activity. The list is paginated, with a default limit of 20 course progress data per page.
     *
     * @param string $id User Id or email (encoded string)
     * @param array $queryParameters {
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|V2UsersIdProgressGetResponse200|ResponseInterface
     * @var string $Authorization The Bearer token
     * @var string $Lw-Client The school Client ID
     * }
     * @var int $items_per_page Filter by the items per page number
     * }
     * @var int $page Filter by the page number. In case page number is higher than the maximum one, no results will be returned
     */
    public function getV2UsersIdProgress(string $id, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetV2UsersIdProgress($id, $queryParameters, $headerParameters), $fetch);
    }

    /**
     * Retrieves the grades of all enrolled users in the course specified by the provided course id. The list is paginated with a limit of 20 grades per page.
     *
     * @param string $id Unique identifier of the course
     * @param array $queryParameters {
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|V2CoursesIdGradesGetResponse200|ResponseInterface
     * @var string $users Filter by user ids. For several id values, a comma separated string can be provided
     * @var string $learningUnits Filter by learning unit ids. For several id values, a comma separated string can be provided.
     * @var int $page Filter by the page number. In case page number is higher than the maximum one, the results of last page will be returned
     * @var int $items_per_page Filter by the items per page number
     * }
     * @var string $Lw-Client The school Client ID
     * @var string $Authorization The Bearer token
     * }
     */
    public function getV2CoursesIdGrades(string $id, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetV2CoursesIdGrades($id, $queryParameters, $headerParameters), $fetch);
    }

    /**
     * Retrieves all the responses a user has submitted in an assessment, with the most recent submission appearing first. The list is paginated with a limit of 20 responses per page.
     *
     * @param string $id Unique identifier of the assessment learning activity
     * @param array $queryParameters {
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|V2AssessmentsIdResponsesGetResponse200|ResponseInterface
     * @var int $page Filter by the page number. In case page number is higher than the maximum one, the results of last page will be returned
     * @var string $users Filter by user ids. For several id values, a comma separated string can be provided
     * @var int $items_per_page Filter by the items per page number
     * }
     * @var string $Authorization The Bearer token
     * @var string $Lw-Client The school Client ID
     * }
     */
    public function getQuestionnaireUnitResponses(string $id, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GetQuestionnaireUnitResponses($id, $queryParameters, $headerParameters), $fetch);
    }

    public static function create($httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = []): Client
    {
        if (null === $httpClient) {
            $httpClient = Psr18ClientDiscovery::find();
            $plugins = [];
            $uri = Psr17FactoryDiscovery::findUriFactory()->createUri('https://stoplight.io/mocks/learnworlds/api:main/2951998');
            $plugins[] = new AddHostPlugin($uri);
            $plugins[] = new AddPathPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new PluginClient($httpClient, $plugins);
        }
        $requestFactory = Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = [new ArrayDenormalizer(), new JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new Serializer($normalizers, [new JsonEncoder(new JsonEncode(), new JsonDecode(['json_decode_associative' => true]))]);
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}
