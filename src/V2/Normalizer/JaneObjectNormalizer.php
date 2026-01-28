<?php

/*
 * This file is part of the package wapplersystems/learnworlds-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace WapplerSystems\LearnWorldsApi\V2\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Exception\ExceptionInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use WapplerSystems\LearnWorldsApi\V2\Model\Affiliate;
use WapplerSystems\LearnWorldsApi\V2\Model\AffiliatePostRequest;
use WapplerSystems\LearnWorldsApi\V2\Model\Bundle;
use WapplerSystems\LearnWorldsApi\V2\Model\BundleAfterPurchase;
use WapplerSystems\LearnWorldsApi\V2\Model\BundleAfterPurchaseSettings;
use WapplerSystems\LearnWorldsApi\V2\Model\BundleProducts;
use WapplerSystems\LearnWorldsApi\V2\Model\Certificate;
use WapplerSystems\LearnWorldsApi\V2\Model\CertificateUpdate;
use WapplerSystems\LearnWorldsApi\V2\Model\CertificateUpdateForm;
use WapplerSystems\LearnWorldsApi\V2\Model\CertificateUser;
use WapplerSystems\LearnWorldsApi\V2\Model\Coupon;
use WapplerSystems\LearnWorldsApi\V2\Model\CouponUsage;
use WapplerSystems\LearnWorldsApi\V2\Model\Course;
use WapplerSystems\LearnWorldsApi\V2\Model\CourseAfterPurchase;
use WapplerSystems\LearnWorldsApi\V2\Model\CourseAfterPurchaseSettings;
use WapplerSystems\LearnWorldsApi\V2\Model\CourseAnalytics;
use WapplerSystems\LearnWorldsApi\V2\Model\CourseContent;
use WapplerSystems\LearnWorldsApi\V2\Model\CourseContentSectionsItem;
use WapplerSystems\LearnWorldsApi\V2\Model\CourseContentSectionsItemLearningUnitsItem;
use WapplerSystems\LearnWorldsApi\V2\Model\CourseIdentifiers;
use WapplerSystems\LearnWorldsApi\V2\Model\Enrollment;
use WapplerSystems\LearnWorldsApi\V2\Model\EventLog;
use WapplerSystems\LearnWorldsApi\V2\Model\EventLogUser;
use WapplerSystems\LearnWorldsApi\V2\Model\Grade;
use WapplerSystems\LearnWorldsApi\V2\Model\GradeLearningUnit;
use WapplerSystems\LearnWorldsApi\V2\Model\Installment;
use WapplerSystems\LearnWorldsApi\V2\Model\Lead;
use WapplerSystems\LearnWorldsApi\V2\Model\Meta;
use WapplerSystems\LearnWorldsApi\V2\Model\Payment;
use WapplerSystems\LearnWorldsApi\V2\Model\PaymentAffiliate;
use WapplerSystems\LearnWorldsApi\V2\Model\PaymentInstructorsItem;
use WapplerSystems\LearnWorldsApi\V2\Model\PaymentProduct;
use WapplerSystems\LearnWorldsApi\V2\Model\PayoutCompleted;
use WapplerSystems\LearnWorldsApi\V2\Model\PayoutCompletedCompletedBy;
use WapplerSystems\LearnWorldsApi\V2\Model\PayoutDueUpcoming;
use WapplerSystems\LearnWorldsApi\V2\Model\Product;
use WapplerSystems\LearnWorldsApi\V2\Model\Promotion;
use WapplerSystems\LearnWorldsApi\V2\Model\PromotionProductsItem;
use WapplerSystems\LearnWorldsApi\V2\Model\PromotionRequestModel;
use WapplerSystems\LearnWorldsApi\V2\Model\PromotionRequestModelCouponsItem;
use WapplerSystems\LearnWorldsApi\V2\Model\Response400;
use WapplerSystems\LearnWorldsApi\V2\Model\Response401;
use WapplerSystems\LearnWorldsApi\V2\Model\Response404;
use WapplerSystems\LearnWorldsApi\V2\Model\Response422;
use WapplerSystems\LearnWorldsApi\V2\Model\Response422Errors;
use WapplerSystems\LearnWorldsApi\V2\Model\Response422ErrorsCompanyItem;
use WapplerSystems\LearnWorldsApi\V2\Model\Response500;
use WapplerSystems\LearnWorldsApi\V2\Model\SchoolEvent;
use WapplerSystems\LearnWorldsApi\V2\Model\SectionRequestModel;
use WapplerSystems\LearnWorldsApi\V2\Model\SubscriptionPlan;
use WapplerSystems\LearnWorldsApi\V2\Model\SubscriptionPlanAfterPurchase;
use WapplerSystems\LearnWorldsApi\V2\Model\SubscriptionPlanAfterPurchaseSettings;
use WapplerSystems\LearnWorldsApi\V2\Model\SubscriptionPlanProducts;
use WapplerSystems\LearnWorldsApi\V2\Model\UnitAnalytics;
use WapplerSystems\LearnWorldsApi\V2\Model\User;
use WapplerSystems\LearnWorldsApi\V2\Model\UserFields;
use WapplerSystems\LearnWorldsApi\V2\Model\UserProgress;
use WapplerSystems\LearnWorldsApi\V2\Model\UserProgressProgressPerSectionUnitItem;
use WapplerSystems\LearnWorldsApi\V2\Model\UserProgressProgressPerSectionUnitItemUnitsItem;
use WapplerSystems\LearnWorldsApi\V2\Model\UserProgressWithCourse;
use WapplerSystems\LearnWorldsApi\V2\Model\UserProgressWithCourseProgressPerSectionUnitItem;
use WapplerSystems\LearnWorldsApi\V2\Model\UserProgressWithCourseProgressPerSectionUnitItemUnitsItem;
use WapplerSystems\LearnWorldsApi\V2\Model\UserRequestModel;
use WapplerSystems\LearnWorldsApi\V2\Model\UserRequestModelFields;
use WapplerSystems\LearnWorldsApi\V2\Model\UserRequestModelUtms;
use WapplerSystems\LearnWorldsApi\V2\Model\UserRequestPutModel;
use WapplerSystems\LearnWorldsApi\V2\Model\UserRequestPutModelFields;
use WapplerSystems\LearnWorldsApi\V2\Model\UserRequestPutModelUtms;
use WapplerSystems\LearnWorldsApi\V2\Model\UserResponse;
use WapplerSystems\LearnWorldsApi\V2\Model\UserResponseAnswersItem;
use WapplerSystems\LearnWorldsApi\V2\Model\UserRole;
use WapplerSystems\LearnWorldsApi\V2\Model\UserSegment;
use WapplerSystems\LearnWorldsApi\V2\Model\UserSubscription;
use WapplerSystems\LearnWorldsApi\V2\Model\V2AffiliatesGetResponse200;
use WapplerSystems\LearnWorldsApi\V2\Model\V2AffiliatesIdCustomersGetResponse200;
use WapplerSystems\LearnWorldsApi\V2\Model\V2AffiliatesIdLeadsGetResponse200;
use WapplerSystems\LearnWorldsApi\V2\Model\V2AffiliatesIdPaymentsGetResponse200;
use WapplerSystems\LearnWorldsApi\V2\Model\V2AffiliatesIdPayoutsCompletedGetResponse200;
use WapplerSystems\LearnWorldsApi\V2\Model\V2AffiliatesIdPayoutsDueGetResponse200;
use WapplerSystems\LearnWorldsApi\V2\Model\V2AffiliatesIdPayoutsUpcomingGetResponse200;
use WapplerSystems\LearnWorldsApi\V2\Model\V2AssessmentsIdResponsesGetResponse200;
use WapplerSystems\LearnWorldsApi\V2\Model\V2BundlesGetResponse200;
use WapplerSystems\LearnWorldsApi\V2\Model\V2CertificatesGetResponse200;
use WapplerSystems\LearnWorldsApi\V2\Model\V2CoursesGetResponse200;
use WapplerSystems\LearnWorldsApi\V2\Model\V2CoursesIdGradesGetResponse200;
use WapplerSystems\LearnWorldsApi\V2\Model\V2CoursesIdPutBody;
use WapplerSystems\LearnWorldsApi\V2\Model\V2CoursesIdUsersGetResponse200;
use WapplerSystems\LearnWorldsApi\V2\Model\V2CoursesPostBody;
use WapplerSystems\LearnWorldsApi\V2\Model\V2EventLogsGetResponse200;
use WapplerSystems\LearnWorldsApi\V2\Model\V2InstallmentsActiveGetResponse200;
use WapplerSystems\LearnWorldsApi\V2\Model\V2LeadsGetResponse200;
use WapplerSystems\LearnWorldsApi\V2\Model\V2PaymentsGetResponse200;
use WapplerSystems\LearnWorldsApi\V2\Model\V2PaymentsIdInvoiceLinkGetResponse200;
use WapplerSystems\LearnWorldsApi\V2\Model\V2PromotionsGetResponse200;
use WapplerSystems\LearnWorldsApi\V2\Model\V2PromotionsIdCouponsBulkPostBody;
use WapplerSystems\LearnWorldsApi\V2\Model\V2PromotionsPidCouponsGetResponse200;
use WapplerSystems\LearnWorldsApi\V2\Model\V2PromotionsPidCouponsPostBody;
use WapplerSystems\LearnWorldsApi\V2\Model\V2PromotionsPostBody;
use WapplerSystems\LearnWorldsApi\V2\Model\V2PromotionsPostBodyProductsItem;
use WapplerSystems\LearnWorldsApi\V2\Model\V2PromotionsPostResponse201;
use WapplerSystems\LearnWorldsApi\V2\Model\V2PromotionsPostResponse201ProductsItem;
use WapplerSystems\LearnWorldsApi\V2\Model\V2SchoolEventsGetResponse200;
use WapplerSystems\LearnWorldsApi\V2\Model\V2SubscriptionPlansGetResponse200;
use WapplerSystems\LearnWorldsApi\V2\Model\V2UsersByProductGetResponse200;
use WapplerSystems\LearnWorldsApi\V2\Model\V2UsersBySegmentGetResponse200;
use WapplerSystems\LearnWorldsApi\V2\Model\V2UsersGetResponse200;
use WapplerSystems\LearnWorldsApi\V2\Model\V2UsersIdCoursesGetResponse200;
use WapplerSystems\LearnWorldsApi\V2\Model\V2UsersIdEnrollmentDeleteBody;
use WapplerSystems\LearnWorldsApi\V2\Model\V2UsersIdEnrollmentPostBody;
use WapplerSystems\LearnWorldsApi\V2\Model\V2UsersIdEnrollmentPostResponse200;
use WapplerSystems\LearnWorldsApi\V2\Model\V2UsersIdProductsGetResponse200;
use WapplerSystems\LearnWorldsApi\V2\Model\V2UsersIdProgressGetResponse200;
use WapplerSystems\LearnWorldsApi\V2\Model\V2UsersIdTagsPutBody;
use WapplerSystems\LearnWorldsApi\V2\Model\V2UsersSegmentsGetResponse200;
use WapplerSystems\LearnWorldsApi\V2\Model\V2UserSubscriptionsGetResponse200;
use WapplerSystems\LearnWorldsApi\V2\Runtime\Normalizer\CheckArray;
use WapplerSystems\LearnWorldsApi\V2\Runtime\Normalizer\ReferenceNormalizer;
use WapplerSystems\LearnWorldsApi\V2\Runtime\Normalizer\ValidatorTrait;

class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    protected array $normalizers = [Course::class => CourseNormalizer::class, CourseAfterPurchase::class => CourseAfterPurchaseNormalizer::class, CourseAfterPurchaseSettings::class => CourseAfterPurchaseSettingsNormalizer::class, CourseIdentifiers::class => CourseIdentifiersNormalizer::class, Meta::class => MetaNormalizer::class, Bundle::class => BundleNormalizer::class, BundleProducts::class => BundleProductsNormalizer::class, BundleAfterPurchase::class => BundleAfterPurchaseNormalizer::class, BundleAfterPurchaseSettings::class => BundleAfterPurchaseSettingsNormalizer::class, SubscriptionPlan::class => SubscriptionPlanNormalizer::class, SubscriptionPlanProducts::class => SubscriptionPlanProductsNormalizer::class, SubscriptionPlanAfterPurchase::class => SubscriptionPlanAfterPurchaseNormalizer::class, SubscriptionPlanAfterPurchaseSettings::class => SubscriptionPlanAfterPurchaseSettingsNormalizer::class, CourseContent::class => CourseContentNormalizer::class, CourseContentSectionsItem::class => CourseContentSectionsItemNormalizer::class, CourseContentSectionsItemLearningUnitsItem::class => CourseContentSectionsItemLearningUnitsItemNormalizer::class, Coupon::class => CouponNormalizer::class, User::class => UserNormalizer::class, UserRole::class => UserRoleNormalizer::class, UserFields::class => UserFieldsNormalizer::class, SchoolEvent::class => SchoolEventNormalizer::class, SectionRequestModel::class => SectionRequestModelNormalizer::class, CourseAnalytics::class => CourseAnalyticsNormalizer::class, UnitAnalytics::class => UnitAnalyticsNormalizer::class, UserSubscription::class => UserSubscriptionNormalizer::class, Payment::class => PaymentNormalizer::class, PaymentProduct::class => PaymentProductNormalizer::class, PaymentInstructorsItem::class => PaymentInstructorsItemNormalizer::class, PaymentAffiliate::class => PaymentAffiliateNormalizer::class, Installment::class => InstallmentNormalizer::class, Promotion::class => PromotionNormalizer::class, PromotionProductsItem::class => PromotionProductsItemNormalizer::class, CouponUsage::class => CouponUsageNormalizer::class, PromotionRequestModel::class => PromotionRequestModelNormalizer::class, PromotionRequestModelCouponsItem::class => PromotionRequestModelCouponsItemNormalizer::class, Lead::class => LeadNormalizer::class, Enrollment::class => EnrollmentNormalizer::class, UserRequestModel::class => UserRequestModelNormalizer::class, UserRequestModelFields::class => UserRequestModelFieldsNormalizer::class, UserRequestModelUtms::class => UserRequestModelUtmsNormalizer::class, UserRequestPutModel::class => UserRequestPutModelNormalizer::class, UserRequestPutModelFields::class => UserRequestPutModelFieldsNormalizer::class, UserRequestPutModelUtms::class => UserRequestPutModelUtmsNormalizer::class, Product::class => ProductNormalizer::class, UserProgress::class => UserProgressNormalizer::class, UserProgressProgressPerSectionUnitItem::class => UserProgressProgressPerSectionUnitItemNormalizer::class, UserProgressProgressPerSectionUnitItemUnitsItem::class => UserProgressProgressPerSectionUnitItemUnitsItemNormalizer::class, UserProgressWithCourse::class => UserProgressWithCourseNormalizer::class, UserProgressWithCourseProgressPerSectionUnitItem::class => UserProgressWithCourseProgressPerSectionUnitItemNormalizer::class, UserProgressWithCourseProgressPerSectionUnitItemUnitsItem::class => UserProgressWithCourseProgressPerSectionUnitItemUnitsItemNormalizer::class, Certificate::class => CertificateNormalizer::class, CertificateUser::class => CertificateUserNormalizer::class, CertificateUpdate::class => CertificateUpdateNormalizer::class, CertificateUpdateForm::class => CertificateUpdateFormNormalizer::class, Affiliate::class => AffiliateNormalizer::class, AffiliatePostRequest::class => AffiliatePostRequestNormalizer::class, PayoutCompleted::class => PayoutCompletedNormalizer::class, PayoutCompletedCompletedBy::class => PayoutCompletedCompletedByNormalizer::class, UserSegment::class => UserSegmentNormalizer::class, PayoutDueUpcoming::class => PayoutDueUpcomingNormalizer::class, EventLog::class => EventLogNormalizer::class, EventLogUser::class => EventLogUserNormalizer::class, Grade::class => GradeNormalizer::class, GradeLearningUnit::class => GradeLearningUnitNormalizer::class, UserResponse::class => UserResponseNormalizer::class, UserResponseAnswersItem::class => UserResponseAnswersItemNormalizer::class, Response400::class => Response400Normalizer::class, Response401::class => Response401Normalizer::class, Response404::class => Response404Normalizer::class, Response422::class => Response422Normalizer::class, Response422Errors::class => Response422ErrorsNormalizer::class, Response422ErrorsCompanyItem::class => Response422ErrorsCompanyItemNormalizer::class, Response500::class => Response500Normalizer::class, V2CoursesGetResponse200::class => V2CoursesGetResponse200Normalizer::class, V2CoursesPostBody::class => V2CoursesPostBodyNormalizer::class, V2CoursesIdPutBody::class => V2CoursesIdPutBodyNormalizer::class, V2BundlesGetResponse200::class => V2BundlesGetResponse200Normalizer::class, V2SubscriptionPlansGetResponse200::class => V2SubscriptionPlansGetResponse200Normalizer::class, V2UserSubscriptionsGetResponse200::class => V2UserSubscriptionsGetResponse200Normalizer::class, V2InstallmentsActiveGetResponse200::class => V2InstallmentsActiveGetResponse200Normalizer::class, V2SchoolEventsGetResponse200::class => V2SchoolEventsGetResponse200Normalizer::class, V2UsersGetResponse200::class => V2UsersGetResponse200Normalizer::class, V2UsersIdCoursesGetResponse200::class => V2UsersIdCoursesGetResponse200Normalizer::class, V2CoursesIdUsersGetResponse200::class => V2CoursesIdUsersGetResponse200Normalizer::class, V2PaymentsGetResponse200::class => V2PaymentsGetResponse200Normalizer::class, V2LeadsGetResponse200::class => V2LeadsGetResponse200Normalizer::class, V2UsersIdProductsGetResponse200::class => V2UsersIdProductsGetResponse200Normalizer::class, V2UsersIdTagsPutBody::class => V2UsersIdTagsPutBodyNormalizer::class, V2PromotionsPidCouponsGetResponse200::class => V2PromotionsPidCouponsGetResponse200Normalizer::class, V2PromotionsPidCouponsPostBody::class => V2PromotionsPidCouponsPostBodyNormalizer::class, V2UsersIdEnrollmentDeleteBody::class => V2UsersIdEnrollmentDeleteBodyNormalizer::class, V2UsersIdEnrollmentPostBody::class => V2UsersIdEnrollmentPostBodyNormalizer::class, V2UsersIdEnrollmentPostResponse200::class => V2UsersIdEnrollmentPostResponse200Normalizer::class, V2AffiliatesGetResponse200::class => V2AffiliatesGetResponse200Normalizer::class, V2AffiliatesIdLeadsGetResponse200::class => V2AffiliatesIdLeadsGetResponse200Normalizer::class, V2PromotionsGetResponse200::class => V2PromotionsGetResponse200Normalizer::class, V2PromotionsPostBody::class => V2PromotionsPostBodyNormalizer::class, V2PromotionsPostBodyProductsItem::class => V2PromotionsPostBodyProductsItemNormalizer::class, V2PromotionsPostResponse201::class => V2PromotionsPostResponse201Normalizer::class, V2PromotionsPostResponse201ProductsItem::class => V2PromotionsPostResponse201ProductsItemNormalizer::class, V2AffiliatesIdCustomersGetResponse200::class => V2AffiliatesIdCustomersGetResponse200Normalizer::class, V2AffiliatesIdPaymentsGetResponse200::class => V2AffiliatesIdPaymentsGetResponse200Normalizer::class, V2PaymentsIdInvoiceLinkGetResponse200::class => V2PaymentsIdInvoiceLinkGetResponse200Normalizer::class, V2UsersSegmentsGetResponse200::class => V2UsersSegmentsGetResponse200Normalizer::class, V2CertificatesGetResponse200::class => V2CertificatesGetResponse200Normalizer::class, V2UsersBySegmentGetResponse200::class => V2UsersBySegmentGetResponse200Normalizer::class, V2UsersByProductGetResponse200::class => V2UsersByProductGetResponse200Normalizer::class, V2AffiliatesIdPayoutsUpcomingGetResponse200::class => V2AffiliatesIdPayoutsUpcomingGetResponse200Normalizer::class, V2AffiliatesIdPayoutsDueGetResponse200::class => V2AffiliatesIdPayoutsDueGetResponse200Normalizer::class, V2AffiliatesIdPayoutsCompletedGetResponse200::class => V2AffiliatesIdPayoutsCompletedGetResponse200Normalizer::class, V2PromotionsIdCouponsBulkPostBody::class => V2PromotionsIdCouponsBulkPostBodyNormalizer::class, V2EventLogsGetResponse200::class => V2EventLogsGetResponse200Normalizer::class, V2UsersIdProgressGetResponse200::class => V2UsersIdProgressGetResponse200Normalizer::class, V2CoursesIdGradesGetResponse200::class => V2CoursesIdGradesGetResponse200Normalizer::class, V2AssessmentsIdResponsesGetResponse200::class => V2AssessmentsIdResponsesGetResponse200Normalizer::class, Reference::class => ReferenceNormalizer::class];
    protected array $normalizersCache = [];

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return array_key_exists($type, $this->normalizers);
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
    }

    /**
     * @return array|string|int|float|bool|ArrayObject|null
     * @throws ExceptionInterface
     */
    public function normalize(mixed $data, ?string $format = null, array $context = []): float|int|bool|ArrayObject|array|string|null
    {
        $normalizerClass = $this->normalizers[get_class($data)];
        return $this->getNormalizer($normalizerClass)->normalize($data, $format, $context);
    }

    /**
     * @return mixed
     * @throws ExceptionInterface
     */
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $denormalizerClass = $this->normalizers[$type];
        return $this->getNormalizer($denormalizerClass)->denormalize($data, $type, $format, $context);
    }

    private function getNormalizer(string $normalizerClass)
    {
        return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
    }

    private function initNormalizer(string $normalizerClass)
    {
        $normalizer = new $normalizerClass();
        //if ($normalizer instanceof NormalizerInterface) {
            //$normalizer->setNormalizer($this->normalizer);
        //}
        if ($normalizer instanceof DenormalizerInterface) {
            $normalizer->setDenormalizer($this->denormalizer);
        }
        $this->normalizersCache[$normalizerClass] = $normalizer;
        return $normalizer;
    }

    public function getSupportedTypes(?string $format): array
    {
        $types = [];
        foreach ($this->normalizers as $type => $normalizerClass) {
            $types[$type] = $this->getNormalizer($normalizerClass)->getSupportedTypes($format)[$type] ?? true;
        }
        return $types;
    }
}
