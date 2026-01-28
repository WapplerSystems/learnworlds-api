<?php

/*
 * This file is part of the package wapplersystems/learnworlds-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace WapplerSystems\LearnWorldsApi\V2;

class Client extends \WapplerSystems\LearnWorldsApi\V2\Runtime\Client\Client
{
    /**
     * Returns a list of all courses of the school. The courses are in sorted order, with the most recently created course appearing first, and the list is paginated, with a limit of 50 courses per page.
     *
     * @param array $queryParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\WapplerSystems\LearnWorldsApi\V2\Model\V2CoursesGetResponse200|\Psr\Http\Message\ResponseInterface
     * @var string $categories Comma seperated names of categories
     * @var int $page Filter by the page number. In case page number is higher than the maximum one, the results of last page will be returned
     * }
     */
    public function getCourses(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \WapplerSystems\LearnWorldsApi\V2\Endpoint\GetCourses($queryParameters), $fetch);
    }

    /**
     * Creates a new course. The endpoint response is the created Course resource.
     *
     * @param null|\WapplerSystems\LearnWorldsApi\V2\Model\V2CoursesPostBody $requestBody
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\WapplerSystems\LearnWorldsApi\V2\Model\Course|\Psr\Http\Message\ResponseInterface
     * @var string $Accept application/json
     * }
     */
    public function postCourses(?\WapplerSystems\LearnWorldsApi\V2\Model\V2CoursesPostBody $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \WapplerSystems\LearnWorldsApi\V2\Endpoint\PostCourses($requestBody, $headerParameters), $fetch);
    }

    /**
     * Returns information about the course specified by the provided course id.
     *
     * @param string $id Unique identifier of the course
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\WapplerSystems\LearnWorldsApi\V2\Model\Course|\Psr\Http\Message\ResponseInterface
     */
    public function getCourseById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \WapplerSystems\LearnWorldsApi\V2\Endpoint\GetCourseById($id), $fetch);
    }

    /**
     * Updates the course specified by the provided course id. The endpoint response is the updated Course resource.
     *
     * @param string $id Unique identifier of the course
     * @param null|\WapplerSystems\LearnWorldsApi\V2\Model\V2CoursesIdPutBody $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\WapplerSystems\LearnWorldsApi\V2\Model\Course|\Psr\Http\Message\ResponseInterface
     */
    public function updateCourse(string $id, ?\WapplerSystems\LearnWorldsApi\V2\Model\V2CoursesIdPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \WapplerSystems\LearnWorldsApi\V2\Endpoint\UpdateCourse($id, $requestBody), $fetch);
    }

    /**
     * Returns analytics about the course specified by the provided course id.
     *
     * @param string $id Course Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\WapplerSystems\LearnWorldsApi\V2\Model\CourseAnalytics|\Psr\Http\Message\ResponseInterface
     */
    public function getCourseAnalytics(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \WapplerSystems\LearnWorldsApi\V2\Endpoint\GetCourseAnalytics($id), $fetch);
    }

    /**
     * Returns analytics about a learning activity of a course specified by the provided course id and learning activity id.
     *
     * @param string $id Course title Id
     * @param string $uid Learning activity id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\WapplerSystems\LearnWorldsApi\V2\Model\UnitAnalytics|\Psr\Http\Message\ResponseInterface
     */
    public function getCourseUnitAnalytics(string $id, string $uid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \WapplerSystems\LearnWorldsApi\V2\Endpoint\GetCourseUnitAnalytics($id, $uid), $fetch);
    }

    /**
     * Returns a list of all bundles of the school. The bundles are in sorted order, with the most recently created bundle appearing first, and the list is paginated, with a limit of 20 bundles per page.
     *
     * @param array $queryParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\WapplerSystems\LearnWorldsApi\V2\Model\V2BundlesGetResponse200|\Psr\Http\Message\ResponseInterface
     * @var int $page Filter by the page number. In case page number is higher than the maximum one, the results of last page will be returned
     * }
     */
    public function getBundles(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \WapplerSystems\LearnWorldsApi\V2\Endpoint\GetBundles($queryParameters), $fetch);
    }

    /**
     * Returns the bundle specified by the provided bundle id.
     *
     * @param string $id Unique identifier of the bundle
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\WapplerSystems\LearnWorldsApi\V2\Model\Bundle|\Psr\Http\Message\ResponseInterface
     */
    public function getBundleById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \WapplerSystems\LearnWorldsApi\V2\Endpoint\GetBundleById($id), $fetch);
    }

    /**
     * Returns a list of all subscription plans. The subscription plans are in sorted order, with the most recently created subscription plan appearing first, and the list is paginated, with a limit of 50 subscription plans per page.
     *
     * @param array $queryParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\WapplerSystems\LearnWorldsApi\V2\Model\V2SubscriptionPlansGetResponse200|\Psr\Http\Message\ResponseInterface
     * @var int $page Filter by the page number. In case page number is higher than the maximum one, the results of last page will be returned
     * }
     */
    public function getSubscriptionPlans(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \WapplerSystems\LearnWorldsApi\V2\Endpoint\GetSubscriptionPlans($queryParameters), $fetch);
    }

    /**
     * Returns the subscription plan specified by the provided subscription plan id.
     *
     * @param string $id Subscription plan Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\WapplerSystems\LearnWorldsApi\V2\Model\SubscriptionPlan|\Psr\Http\Message\ResponseInterface
     */
    public function getSubscriptionPlansById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \WapplerSystems\LearnWorldsApi\V2\Endpoint\GetSubscriptionPlansById($id), $fetch);
    }

    /**
     * Returns a list with the user subscriptions. The subscriptions are in sorted order based on user's creation date in descending order and the list is paginated, with a limit of 20 subscriptions per page. To refine the list of subscriptions, there are a number of query params outlined in the following section; In case more than one Query param is provided, then all of them will be applied (AND operator).
     *
     * @param array $queryParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\WapplerSystems\LearnWorldsApi\V2\Model\V2UserSubscriptionsGetResponse200|\Psr\Http\Message\ResponseInterface
     * @var int $page Filter by the page number. In case page number is higher than the maximum one, the results of last page will be returned
     * }
     * @var string $user_id Filter by user id or email (url encoded string)
     * @var string $status Filter by subscription status
     */
    public function getUserSubscriptions(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \WapplerSystems\LearnWorldsApi\V2\Endpoint\GetUserSubscriptions($queryParameters), $fetch);
    }

    /**
     * Return a list with active installments of users. The installments are in sorted order based on user's creation date in descending order, and the list is paginated, with a limit of 50 installments per page. To refine the list of installments, there are a number of query params outlined in the following section; In case more than one Query param is provided, then all of them will be applied (AND operator).
     *
     * @param array $queryParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\WapplerSystems\LearnWorldsApi\V2\Model\V2InstallmentsActiveGetResponse200|\Psr\Http\Message\ResponseInterface
     * @var string $product_type Filter by product type
     * @var int $page Filter by the page number. In case page number is higher than the maximum one, no results will be returned
     * }
     * @var string $product_id Filter by product Id
     * @var string $user_id Filter by a user id or email (url encoded string)
     */
    public function getInstallments(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \WapplerSystems\LearnWorldsApi\V2\Endpoint\GetInstallments($queryParameters), $fetch);
    }

    /**
     * Returns all the upcoming scheduled school events, regarding course drip feed, file assignment and live session.
     *
     * @param array $queryParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\WapplerSystems\LearnWorldsApi\V2\Model\V2SchoolEventsGetResponse200|\Psr\Http\Message\ResponseInterface
     * @var string $event_type Filter by event type
     * }
     */
    public function getSchoolEvents(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \WapplerSystems\LearnWorldsApi\V2\Endpoint\GetSchoolEvents($queryParameters), $fetch);
    }

    /**
     * Returns a list with all the users of the school. The users are in sorted order, with the most recently created user appearing first, and the list is paginated, with a default limit of 20 users per page.
     * To refine the list of users, there are a number of query params outlined in the following section; In case more than one Query param is provided, then all of them will be applied (AND operator).
     *
     * @param array $queryParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\WapplerSystems\LearnWorldsApi\V2\Model\V2UsersGetResponse200|\Psr\Http\Message\ResponseInterface
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
     */
    public function getUsers(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \WapplerSystems\LearnWorldsApi\V2\Endpoint\GetUsers($queryParameters), $fetch);
    }

    /**
     * Creates a new user. The endpoint response is the created User resource.
     *
     * @param null|\WapplerSystems\LearnWorldsApi\V2\Model\UserRequestModel $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\WapplerSystems\LearnWorldsApi\V2\Model\User|\Psr\Http\Message\ResponseInterface
     */
    public function createUser(?\WapplerSystems\LearnWorldsApi\V2\Model\UserRequestModel $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \WapplerSystems\LearnWorldsApi\V2\Endpoint\CreateUser($requestBody), $fetch);
    }

    /**
     * Returns the user specified by the provided user id.
     *
     * @param string $id User Id or email (encoded string)
     * @param array $queryParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\WapplerSystems\LearnWorldsApi\V2\Model\User|\Psr\Http\Message\ResponseInterface
     * @var string $include_suspended Filter by include_suspended flag. The default value is false.
     * }
     */
    public function getUserById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \WapplerSystems\LearnWorldsApi\V2\Endpoint\GetUserById($id, $queryParameters), $fetch);
    }

    /**
     * Updates user information. The endpoint response is the updated User resource.
     *
     * @param string $id User Id or email (encoded string)
     * @param null|\WapplerSystems\LearnWorldsApi\V2\Model\UserRequestPutModel $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\WapplerSystems\LearnWorldsApi\V2\Model\User|\Psr\Http\Message\ResponseInterface
     */
    public function updateUser(string $id, ?\WapplerSystems\LearnWorldsApi\V2\Model\UserRequestPutModel $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \WapplerSystems\LearnWorldsApi\V2\Endpoint\UpdateUser($id, $requestBody), $fetch);
    }

    /**
     * Returns a list with all course enrollment data of the specified user. The list is paginated, with a limit of 50 course enrollments per page.
     *
     * @param string $id User Id or email (encoded string)
     * @param array $queryParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\WapplerSystems\LearnWorldsApi\V2\Model\V2UsersIdCoursesGetResponse200|\Psr\Http\Message\ResponseInterface
     * @var int $page Filter by the page number. In case page number is higher than the maximum one, the results of last page will be returned
     * }
     */
    public function getUsersIdCourses(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \WapplerSystems\LearnWorldsApi\V2\Endpoint\GetUsersIdCourses($id, $queryParameters), $fetch);
    }

    /**
     * Retrieves all the users enrolled in the course specified by the provided course id. The users are in sorted order, with the most recently created user appearing first, and the list is paginated, with a default limit of 20 users per page.
     *
     * @param string $id Course id
     * @param array $queryParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\WapplerSystems\LearnWorldsApi\V2\Model\V2CoursesIdUsersGetResponse200|\Psr\Http\Message\ResponseInterface
     * @var int $page Filter by the page number. In case page number is higher than the maximum one, the results of last page will be returned
     * @var int $items_per_page Filter by the items per page number
     * }
     */
    public function getCourseUsers(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \WapplerSystems\LearnWorldsApi\V2\Endpoint\GetCourseUsers($id, $queryParameters), $fetch);
    }

    /**
     * Creates a new course section in the course, specified by the course id. The endpoint response is the course contents including the newly created section.
     *
     * @param string $id Course Id
     * @param null|\stdClass $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\WapplerSystems\LearnWorldsApi\V2\Model\CourseContent|\Psr\Http\Message\ResponseInterface
     */
    public function postCourseSections(string $id, ?\stdClass $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \WapplerSystems\LearnWorldsApi\V2\Endpoint\PostCourseSections($id, $requestBody), $fetch);
    }

    /**
     * Returns a list with all the payments. The payments are in sorted order, with the most recently created payment appearing first, and the list is paginated, with a default limit of 50 payments per page. To refine the list of payments, there are a number of query params outlined in the following section; In case more than one Query param is provided, then all of them will be applied (AND operator).
     *
     * @param array $queryParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\WapplerSystems\LearnWorldsApi\V2\Model\V2PaymentsGetResponse200|\Psr\Http\Message\ResponseInterface
     * @var string $affiliate_id Filter by affiliate id or email (encoded string)
     * @var string $product_id Filter by product id
     * @var int $page Filter by the page number. In case page number is higher than the maximum one, the results of last page will be returned
     * @var int $items_per_page Filter by the items per page number
     * }
     * @var string $product_type Filter by product type
     * @var string $user_id Filter by user id or email (encoded string)
     */
    public function getTransactions(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \WapplerSystems\LearnWorldsApi\V2\Endpoint\GetTransactions($queryParameters), $fetch);
    }

    /**
     * Returns information about the payment specified by the provided payment id.
     *
     * @param string $id Payment Id or Transaction id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\WapplerSystems\LearnWorldsApi\V2\Model\Payment|\Psr\Http\Message\ResponseInterface
     */
    public function getTransaction(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \WapplerSystems\LearnWorldsApi\V2\Endpoint\GetTransaction($id), $fetch);
    }

    /**
     * Returns the contents of the course specified by the provided course id. Includes sections and learning activities.
     *
     * @param string $id Course title Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\WapplerSystems\LearnWorldsApi\V2\Model\CourseContent|\Psr\Http\Message\ResponseInterface
     */
    public function getCourseContents(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \WapplerSystems\LearnWorldsApi\V2\Endpoint\GetCourseContents($id), $fetch);
    }

    /**
     * Returns a list with all the leads of the school. The leads are in sorted order, with the most recently created leads appearing first, and the list is paginated, with a limit of 20 leads per page.
     *
     * @param array $queryParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\WapplerSystems\LearnWorldsApi\V2\Model\V2LeadsGetResponse200|\Psr\Http\Message\ResponseInterface
     * @var int $page Filter by the page number. In case page number is higher than the maximum one, the results of last page will be returned
     * }
     */
    public function getLeads(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \WapplerSystems\LearnWorldsApi\V2\Endpoint\GetLeads($queryParameters), $fetch);
    }

    /**
     * Returns a list with all the products of the user specified by the provided user id.
     *
     * @param string $id User id or email
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\WapplerSystems\LearnWorldsApi\V2\Model\V2UsersIdProductsGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getUserProducts(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \WapplerSystems\LearnWorldsApi\V2\Endpoint\GetUserProducts($id), $fetch);
    }

    /**
     * Updates the tags of the user specified by the provided user Id or email. The endpoint response is the updated User resource.
     *
     * @param string $id User Id or email (encoded string)
     * @param null|\WapplerSystems\LearnWorldsApi\V2\Model\V2UsersIdTagsPutBody $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\WapplerSystems\LearnWorldsApi\V2\Model\User|\Psr\Http\Message\ResponseInterface
     */
    public function updateUserTags(string $id, ?\WapplerSystems\LearnWorldsApi\V2\Model\V2UsersIdTagsPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \WapplerSystems\LearnWorldsApi\V2\Endpoint\UpdateUserTags($id, $requestBody), $fetch);
    }

    /**
     * Returns all coupons for the promotion specified by the provided promotion id.
     *
     * @param string $pid Promotion Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\WapplerSystems\LearnWorldsApi\V2\Model\V2PromotionsPidCouponsGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getPromotionCoupons(string $pid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \WapplerSystems\LearnWorldsApi\V2\Endpoint\GetPromotionCoupons($pid), $fetch);
    }

    /**
     * Creates a coupon for the promotion specified by the provided promotion id. The endpoint response is the created coupon resource.
     *
     * @param string $pid Promotion Id
     * @param null|\WapplerSystems\LearnWorldsApi\V2\Model\V2PromotionsPidCouponsPostBody $requestBody
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\WapplerSystems\LearnWorldsApi\V2\Model\Coupon|\Psr\Http\Message\ResponseInterface
     * @var string $Content -Type application/json
     * }
     */
    public function postPromotionsPidCoupons(string $pid, ?\WapplerSystems\LearnWorldsApi\V2\Model\V2PromotionsPidCouponsPostBody $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \WapplerSystems\LearnWorldsApi\V2\Endpoint\PostPromotionsPidCoupons($pid, $requestBody, $headerParameters), $fetch);
    }

    /**
     * Returns information about the coupon specified by the provided promotion id and coupon code. More specifically, the coupon usage details are listed along with the asocciated payments.The payments are in sorted order, with the most recently created payment appearing first, and the list is paginated, with a limit of 50 payments per page.
     *
     * @param string $pid Promotion Id
     * @param string $cid Coupon code
     * @param array $queryParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\WapplerSystems\LearnWorldsApi\V2\Model\CouponUsage|\Psr\Http\Message\ResponseInterface
     * @var int $page Filter by the page number. In case page number is higher than the maximum one, the results of last page will be returned
     * }
     */
    public function getCouponRedemptions(string $pid, string $cid, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \WapplerSystems\LearnWorldsApi\V2\Endpoint\GetCouponRedemptions($pid, $cid, $queryParameters), $fetch);
    }

    /**
     * Unenroll user from a product specified by the provided product id
     *
     * @param string $id User Id or email (encoded string)
     * @param null|\WapplerSystems\LearnWorldsApi\V2\Model\V2UsersIdEnrollmentDeleteBody $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteUsersIdProductEnrollmentPid(string $id, ?\WapplerSystems\LearnWorldsApi\V2\Model\V2UsersIdEnrollmentDeleteBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \WapplerSystems\LearnWorldsApi\V2\Endpoint\DeleteUsersIdProductEnrollmentPid($id, $requestBody), $fetch);
    }

    /**
     * Enroll user to product, regarding course, bundle, manual subscription
     *
     * @param string $id User Id or email (encoded string)
     * @param null|\WapplerSystems\LearnWorldsApi\V2\Model\V2UsersIdEnrollmentPostBody $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\WapplerSystems\LearnWorldsApi\V2\Model\V2UsersIdEnrollmentPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function enrollUserToProduct(string $id, ?\WapplerSystems\LearnWorldsApi\V2\Model\V2UsersIdEnrollmentPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \WapplerSystems\LearnWorldsApi\V2\Endpoint\EnrollUserToProduct($id, $requestBody), $fetch);
    }

    /**
     * Returns a list with all the affiliates of the school. The affiliates are in sorted order, with the most recently created affiliate appearing first, and the list is paginated, with a limit of 20 affiliates per page.
     *
     * @param array $queryParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\WapplerSystems\LearnWorldsApi\V2\Model\V2AffiliatesGetResponse200|\Psr\Http\Message\ResponseInterface
     * @var int $page Filter by the page number. In case page number is higher than the maximum one, the results of last page will be returned
     * }
     */
    public function getAffiliates(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \WapplerSystems\LearnWorldsApi\V2\Endpoint\GetAffiliates($queryParameters), $fetch);
    }

    /**
     * Retrieves all the leads connected with the affiliate specified by the provided affiliate id. The leads are in sorted order, with the most recently created lead appearing first, and the list is paginated, with a limit of 20 leads per page.
     *
     * @param string $id Affiliate Id or email (encoded string)
     * @param array $queryParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\WapplerSystems\LearnWorldsApi\V2\Model\V2AffiliatesIdLeadsGetResponse200|\Psr\Http\Message\ResponseInterface
     * @var int $page Filter by the page number. In case page number is higher than the maximum one, the results of last page will be returned
     * }
     */
    public function getAffiliateLeads(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \WapplerSystems\LearnWorldsApi\V2\Endpoint\GetAffiliateLeads($id, $queryParameters), $fetch);
    }

    /**
     * Deletes the certificate specified by the provided certificate id.
     *
     * @param string $id Certificate Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteCertificateById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \WapplerSystems\LearnWorldsApi\V2\Endpoint\DeleteCertificateById($id), $fetch);
    }

    /**
     * Updates the certificate specified by the provided certificate id.
     *
     * @param string $id Certificate Id
     * @param null|\WapplerSystems\LearnWorldsApi\V2\Model\CertificateUpdate $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\WapplerSystems\LearnWorldsApi\V2\Model\Certificate|\Psr\Http\Message\ResponseInterface
     */
    public function updateCertificate(string $id, ?\WapplerSystems\LearnWorldsApi\V2\Model\CertificateUpdate $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \WapplerSystems\LearnWorldsApi\V2\Endpoint\UpdateCertificate($id, $requestBody), $fetch);
    }

    /**
     * Returns a list with all the promotions of the school. The promotions are in sorted order, with the most recently created promotion appearing first, and the list is paginated, with a limit of 20 promotions per page.
     *
     * @param array $queryParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\WapplerSystems\LearnWorldsApi\V2\Model\V2PromotionsGetResponse200|\Psr\Http\Message\ResponseInterface
     * @var int $page Filter by the page number. In case page number is higher than the maximum one, the results of last page will be returned
     * }
     */
    public function getPromotions(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \WapplerSystems\LearnWorldsApi\V2\Endpoint\GetPromotions($queryParameters), $fetch);
    }

    /**
     * Create a new Promotion without coupons. The endpoint response is the created Promotion resource.
     *
     * @param null|\WapplerSystems\LearnWorldsApi\V2\Model\V2PromotionsPostBody $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\WapplerSystems\LearnWorldsApi\V2\Model\V2PromotionsPostResponse201|\Psr\Http\Message\ResponseInterface
     */
    public function postPromotions(?\WapplerSystems\LearnWorldsApi\V2\Model\V2PromotionsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \WapplerSystems\LearnWorldsApi\V2\Endpoint\PostPromotions($requestBody), $fetch);
    }

    /**
     * Retrieves all the customers connected with the affiliate specified by the provided affiliate id. The customers are in sorted order, with the most recently created customer appearing first, and the list is paginated, with a limit of 20 customers per page.
     *
     * @param string $id Affiliate Id or email (encoded string)
     * @param array $queryParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\WapplerSystems\LearnWorldsApi\V2\Model\V2AffiliatesIdCustomersGetResponse200|\Psr\Http\Message\ResponseInterface
     * @var int $page Filter by the page number. In case page number is higher than the maximum one, the results of last page will be returned
     * }
     */
    public function getCustomersPerAffiliate(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \WapplerSystems\LearnWorldsApi\V2\Endpoint\GetCustomersPerAffiliate($id, $queryParameters), $fetch);
    }

    /**
     * Returns a list with all the affiliate payments. The payments are in sorted order, with the most recently created payment appearing first, and the list is paginated, with a limit of 50 payments per page. To refine the list of payments, there are a number of query params outlined in the following section; In case more than one Query param is provided, then all of them will be applied (AND operator).
     *
     * @param string $id Affiliate Id or email (encoded string)
     * @param array $queryParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\WapplerSystems\LearnWorldsApi\V2\Model\V2AffiliatesIdPaymentsGetResponse200|\Psr\Http\Message\ResponseInterface
     * @var int $page Filter by the page number. In case page number is higher than the maximum one, the results of last page will be returned
     * }
     */
    public function getAffiliatePayments(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \WapplerSystems\LearnWorldsApi\V2\Endpoint\GetAffiliatePayments($id, $queryParameters), $fetch);
    }

    /**
     * Returns the invoice number and a private expiring link to acccess the invoice.
     *
     * @param string $id Payment Id or Transaction id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\WapplerSystems\LearnWorldsApi\V2\Model\V2PaymentsIdInvoiceLinkGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getPaymentsInvoicelink(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \WapplerSystems\LearnWorldsApi\V2\Endpoint\GetPaymentsInvoicelink($id), $fetch);
    }

    /**
     * Returns information about the user progress for the user and course specified by the provided user id and course id. The result also includes the breakdown of user progress data per learning activity.
     *
     * @param string $id User Id or email (encoded string)
     * @param string $cid Course title Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\WapplerSystems\LearnWorldsApi\V2\Model\UserProgress|\Psr\Http\Message\ResponseInterface
     */
    public function getUsersIdCoursesCidProgress(string $id, string $cid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \WapplerSystems\LearnWorldsApi\V2\Endpoint\GetUsersIdCoursesCidProgress($id, $cid), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\WapplerSystems\LearnWorldsApi\V2\Model\V2UsersSegmentsGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getUserSegments(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \WapplerSystems\LearnWorldsApi\V2\Endpoint\GetUserSegments(), $fetch);
    }

    /**
     * Suspends a user from loging in or creating another account. The endpoint response is the suspended User resource.
     *
     * @param string $id User id or email (encoded string)
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\WapplerSystems\LearnWorldsApi\V2\Model\User|\Psr\Http\Message\ResponseInterface
     */
    public function suspendUser(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \WapplerSystems\LearnWorldsApi\V2\Endpoint\SuspendUser($id), $fetch);
    }

    /**
     * Unsuspends a user. The endpoint response is the unsuspended User resource.
     *
     * @param string $id User id or email (encoded string)
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\WapplerSystems\LearnWorldsApi\V2\Model\User|\Psr\Http\Message\ResponseInterface
     */
    public function unsuspendUser(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \WapplerSystems\LearnWorldsApi\V2\Endpoint\UnsuspendUser($id), $fetch);
    }

    /**
     * Returns a list with certificates. The certificates are in sorted order, with the most recently created user appearing first, and the list is paginated, with a limit of 20 certificates per page. To refine the list of certificates, there are a number of query params outlined in the following section; In case more than one Query param is provided, then all of them will be applied (AND operator). At least one query parameter is required.
     *
     * @param array $queryParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\WapplerSystems\LearnWorldsApi\V2\Model\V2CertificatesGetResponse200|\Psr\Http\Message\ResponseInterface
     * @var string $course_id Filter by course title id
     * @var string $user_id Filter by user id or email
     * }
     */
    public function getCertificates(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \WapplerSystems\LearnWorldsApi\V2\Endpoint\GetCertificates($queryParameters), $fetch);
    }

    /**
     * Returns the promotion specified by the provided promotion id.
     *
     * @param string $id Promotion Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\WapplerSystems\LearnWorldsApi\V2\Model\Promotion|\Psr\Http\Message\ResponseInterface
     */
    public function getPromotionById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \WapplerSystems\LearnWorldsApi\V2\Endpoint\GetPromotionById($id), $fetch);
    }

    /**
     * Retrieves all the users in the segment specified by the provided segment id. The users are in sorted order, with the most recently created user appearing first, and the list is paginated, with a limit of 20 user per page.
     *
     * @param array $queryParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\WapplerSystems\LearnWorldsApi\V2\Model\V2UsersBySegmentGetResponse200|\Psr\Http\Message\ResponseInterface
     * @var string $segment_id Filter by segment id
     * @var int $page Filter by the page number. In case page number is higher than the maximum one, no results will be returned
     * }
     */
    public function getUsersBySegment(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \WapplerSystems\LearnWorldsApi\V2\Endpoint\GetUsersBySegment($queryParameters), $fetch);
    }

    /**
     * Retrieves all the users with access to the product specified by the provided product id. The users are in sorted order, with the most recently created user appearing first, and the list is paginated, with a limit of 20 users per page.
     *
     * @param array $queryParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\WapplerSystems\LearnWorldsApi\V2\Model\V2UsersByProductGetResponse200|\Psr\Http\Message\ResponseInterface
     * @var int $page Filter by the page number. In case page number is higher than the maximum one, the results of last page will be returned
     * }
     * @var string $product_id Filter by product title Id
     * @var string $product_type Filter by product type
     */
    public function getUsersByProduct(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \WapplerSystems\LearnWorldsApi\V2\Endpoint\GetUsersByProduct($queryParameters), $fetch);
    }

    /**
     * Returns the upcoming payouts specified by the provided affiliate id
     *
     * @param string $id Affiliate Id or email (encoded string)
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\WapplerSystems\LearnWorldsApi\V2\Model\V2AffiliatesIdPayoutsUpcomingGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getAffiliatesIdPayoutsUpcoming(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \WapplerSystems\LearnWorldsApi\V2\Endpoint\GetAffiliatesIdPayoutsUpcoming($id), $fetch);
    }

    /**
     * Returns the due payouts related to the provided affiliate
     *
     * @param string $id Affiliate Id or email (encoded string)
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\WapplerSystems\LearnWorldsApi\V2\Model\V2AffiliatesIdPayoutsDueGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getAffiliatesIdPayoutsDue(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \WapplerSystems\LearnWorldsApi\V2\Endpoint\GetAffiliatesIdPayoutsDue($id), $fetch);
    }

    /**
     * Returns a list with all the completed payouts related to the provided affiliate. The payouts are in sorted order, with the most recently created payouts appearing first, and the list is paginated, with a limit of 20 payouts per page.
     *
     * @param string $id Affiliate Id or email (encoded string)
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\WapplerSystems\LearnWorldsApi\V2\Model\V2AffiliatesIdPayoutsCompletedGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getCompletedAffiliatePayouts(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \WapplerSystems\LearnWorldsApi\V2\Endpoint\GetCompletedAffiliatePayouts($id), $fetch);
    }

    /**
     * Bulk create coupons in a promotion. The endpoint response is an array with the created coupon resources.
     *
     * @param string $id Promotion id
     * @param null|\WapplerSystems\LearnWorldsApi\V2\Model\V2PromotionsIdCouponsBulkPostBody $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\WapplerSystems\LearnWorldsApi\V2\Model\Coupon[]|\Psr\Http\Message\ResponseInterface
     */
    public function createPromotionCouponsBulk(string $id, ?\WapplerSystems\LearnWorldsApi\V2\Model\V2PromotionsIdCouponsBulkPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \WapplerSystems\LearnWorldsApi\V2\Endpoint\CreatePromotionCouponsBulk($id, $requestBody), $fetch);
    }

    /**
     * Returns a list with all event logs of the school. The list is paginated, with a limit of 50 event logs per page. To refine the list of event logs, there are a number of query params outlined in the following section; In case more than one Query param is provided, then all of them will be applied (AND operator).
     *
     * @param array $queryParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\WapplerSystems\LearnWorldsApi\V2\Model\V2EventLogsGetResponse200|\Psr\Http\Message\ResponseInterface
     * @var string $created_after Filter by event log creation after the given datetime (expected in UNIX timestamp format)
     * @var string $created_before Filter by event log creation before the given datetime (expected in UNIX timestamp format)
     * @var int $page Filter by the page number. In case page number is higher than the maximum one, the results of last page will be returned
     * @var string $sort Sort by creation timestamp in ascending or descending order.
     * }
     * @var string $user_id Filter by user id or email (encoded string)
     * @var string $activity Filter by activity name. If no activity is selected all will be applied.
     */
    public function getEventLogs(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \WapplerSystems\LearnWorldsApi\V2\Endpoint\GetEventLogs($queryParameters), $fetch);
    }

    /**
     * Makes a user specified by the provided user id an affiliate. The endpoint response is the affiliate resource.
     *
     * @param string $id User Id or email (encoded string)
     * @param null|\WapplerSystems\LearnWorldsApi\V2\Model\AffiliatePostRequest $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\WapplerSystems\LearnWorldsApi\V2\Model\Affiliate|\Psr\Http\Message\ResponseInterface
     */
    public function makeAffiliate(string $id, ?\WapplerSystems\LearnWorldsApi\V2\Model\AffiliatePostRequest $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \WapplerSystems\LearnWorldsApi\V2\Endpoint\MakeAffiliate($id, $requestBody), $fetch);
    }

    /**
     * Returns information about the user progress, for the user specified by the provided user id, for all courses the user is enrolled in. The result also includes the breakdown of user progress data per learning activity. The list is paginated, with a default limit of 20 course progress data per page.
     *
     * @param string $id User Id or email (encoded string)
     * @param array $queryParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\WapplerSystems\LearnWorldsApi\V2\Model\V2UsersIdProgressGetResponse200|\Psr\Http\Message\ResponseInterface
     * @var int $page Filter by the page number. In case page number is higher than the maximum one, no results will be returned
     * @var int $items_per_page Filter by the items per page number
     * }
     */
    public function getUserProgress(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \WapplerSystems\LearnWorldsApi\V2\Endpoint\GetUserProgress($id, $queryParameters), $fetch);
    }

    /**
     * Retrieves the grades of all enrolled users in the course specified by the provided course id. The list is paginated with a limit of 20 grades per page.
     *
     * @param string $id Unique identifier of the course
     * @param array $queryParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\WapplerSystems\LearnWorldsApi\V2\Model\V2CoursesIdGradesGetResponse200|\Psr\Http\Message\ResponseInterface
     * @var int $page Filter by the page number. In case page number is higher than the maximum one, the results of last page will be returned
     * @var int $items_per_page Filter by the items per page number
     * }
     * @var string $users Filter by user ids. For several id values, a comma separated string can be provided
     * @var string $learningUnits Filter by learning unit ids. For several id values, a comma separated string can be provided.
     */
    public function getCourseGrades(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \WapplerSystems\LearnWorldsApi\V2\Endpoint\GetCourseGrades($id, $queryParameters), $fetch);
    }

    /**
     * Retrieves all the responses a user has submitted in an assessment, with the most recent submission appearing first. The list is paginated with a limit of 20 responses per page.
     *
     * @param string $id Unique identifier of the assessment learning activity
     * @param array $queryParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\WapplerSystems\LearnWorldsApi\V2\Model\V2AssessmentsIdResponsesGetResponse200|\Psr\Http\Message\ResponseInterface
     * @var int $items_per_page Filter by the items per page number
     * }
     * @var int $page Filter by the page number. In case page number is higher than the maximum one, the results of last page will be returned
     * @var string $users Filter by user ids. For several id values, a comma separated string can be provided
     */
    public function getQuestionnaireUnitResponses(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \WapplerSystems\LearnWorldsApi\V2\Endpoint\GetQuestionnaireUnitResponses($id, $queryParameters), $fetch);
    }

    public static function create($httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [])
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = [];
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUriFactory()->createUri('https://{SCHOOLHOMEPAGE}/admin/api');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \WapplerSystems\LearnWorldsApi\V2\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true]))]);
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}
