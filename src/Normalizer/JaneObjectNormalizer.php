<?php

/*
 * This file is part of the package wapplersystems/learnworlds-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace WapplerSystems\LearnWorldsApi\Normalizer;

use ArrayObject;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use WapplerSystems\LearnWorldsApi\Runtime\Normalizer\CheckArray;
use WapplerSystems\LearnWorldsApi\Runtime\Normalizer\ValidatorTrait;
use WapplerSystems\LearnWorldsApi\Runtime\Normalizer\ReferenceNormalizer;
use Jane\Component\JsonSchemaRuntime\Reference;
use WapplerSystems\LearnWorldsApi\Normalizer\V2AssessmentsIdResponsesGetResponse200Normalizer;
use WapplerSystems\LearnWorldsApi\Model\V2AssessmentsIdResponsesGetResponse200;
use WapplerSystems\LearnWorldsApi\Normalizer\V2CoursesIdGradesGetResponse200Normalizer;
use WapplerSystems\LearnWorldsApi\Model\V2CoursesIdGradesGetResponse200;
use WapplerSystems\LearnWorldsApi\Normalizer\V2UsersIdProgressGetResponse200Normalizer;
use WapplerSystems\LearnWorldsApi\Model\V2UsersIdProgressGetResponse200;
use WapplerSystems\LearnWorldsApi\Normalizer\V2EventLogsGetResponse200Normalizer;
use WapplerSystems\LearnWorldsApi\Model\V2EventLogsGetResponse200;
use WapplerSystems\LearnWorldsApi\Normalizer\V2PromotionsIdCouponsBulkPostBodyNormalizer;
use WapplerSystems\LearnWorldsApi\Model\V2PromotionsIdCouponsBulkPostBody;
use WapplerSystems\LearnWorldsApi\Normalizer\V2AffiliatesIdPayoutsCompletedGetResponse200Normalizer;
use WapplerSystems\LearnWorldsApi\Model\V2AffiliatesIdPayoutsCompletedGetResponse200;
use WapplerSystems\LearnWorldsApi\Normalizer\V2AffiliatesIdPayoutsDueGetResponse200Normalizer;
use WapplerSystems\LearnWorldsApi\Model\V2AffiliatesIdPayoutsDueGetResponse200;
use WapplerSystems\LearnWorldsApi\Normalizer\V2AffiliatesIdPayoutsUpcomingGetResponse200Normalizer;
use WapplerSystems\LearnWorldsApi\Model\V2AffiliatesIdPayoutsUpcomingGetResponse200;
use WapplerSystems\LearnWorldsApi\Normalizer\V2UsersByProductGetResponse200Normalizer;
use WapplerSystems\LearnWorldsApi\Model\V2UsersByProductGetResponse200;
use WapplerSystems\LearnWorldsApi\Normalizer\V2UsersBySegmentGetResponse200Normalizer;
use WapplerSystems\LearnWorldsApi\Model\V2UsersBySegmentGetResponse200;
use WapplerSystems\LearnWorldsApi\Normalizer\V2CertificatesGetResponse200Normalizer;
use WapplerSystems\LearnWorldsApi\Model\V2CertificatesGetResponse200;
use WapplerSystems\LearnWorldsApi\Normalizer\V2UsersSegmentsGetResponse200Normalizer;
use WapplerSystems\LearnWorldsApi\Model\V2UsersSegmentsGetResponse200;
use WapplerSystems\LearnWorldsApi\Normalizer\V2PaymentsIdInvoiceLinkGetResponse200Normalizer;
use WapplerSystems\LearnWorldsApi\Model\V2PaymentsIdInvoiceLinkGetResponse200;
use WapplerSystems\LearnWorldsApi\Normalizer\V2AffiliatesIdPaymentsGetResponse200Normalizer;
use WapplerSystems\LearnWorldsApi\Model\V2AffiliatesIdPaymentsGetResponse200;
use WapplerSystems\LearnWorldsApi\Normalizer\V2AffiliatesIdCustomersGetResponse200Normalizer;
use WapplerSystems\LearnWorldsApi\Model\V2AffiliatesIdCustomersGetResponse200;
use WapplerSystems\LearnWorldsApi\Normalizer\V2PromotionsPostResponse201ProductsItemNormalizer;
use WapplerSystems\LearnWorldsApi\Model\V2PromotionsPostResponse201ProductsItem;
use WapplerSystems\LearnWorldsApi\Normalizer\V2PromotionsPostResponse201Normalizer;
use WapplerSystems\LearnWorldsApi\Model\V2PromotionsPostResponse201;
use WapplerSystems\LearnWorldsApi\Normalizer\V2PromotionsPostBodyProductsItemNormalizer;
use WapplerSystems\LearnWorldsApi\Model\V2PromotionsPostBodyProductsItem;
use WapplerSystems\LearnWorldsApi\Normalizer\V2PromotionsPostBodyNormalizer;
use WapplerSystems\LearnWorldsApi\Model\V2PromotionsPostBody;
use WapplerSystems\LearnWorldsApi\Normalizer\V2PromotionsGetResponse200Normalizer;
use WapplerSystems\LearnWorldsApi\Model\V2PromotionsGetResponse200;
use WapplerSystems\LearnWorldsApi\Normalizer\V2AffiliatesIdLeadsGetResponse200Normalizer;
use WapplerSystems\LearnWorldsApi\Model\V2AffiliatesIdLeadsGetResponse200;
use WapplerSystems\LearnWorldsApi\Normalizer\V2AffiliatesGetResponse200Normalizer;
use WapplerSystems\LearnWorldsApi\Model\V2AffiliatesGetResponse200;
use WapplerSystems\LearnWorldsApi\Normalizer\V2UsersIdEnrollmentPostResponse200Normalizer;
use WapplerSystems\LearnWorldsApi\Model\V2UsersIdEnrollmentPostResponse200;
use WapplerSystems\LearnWorldsApi\Normalizer\V2UsersIdEnrollmentPostBodyNormalizer;
use WapplerSystems\LearnWorldsApi\Model\V2UsersIdEnrollmentPostBody;
use WapplerSystems\LearnWorldsApi\Normalizer\V2UsersIdEnrollmentDeleteBodyNormalizer;
use WapplerSystems\LearnWorldsApi\Model\V2UsersIdEnrollmentDeleteBody;
use WapplerSystems\LearnWorldsApi\Normalizer\V2PromotionsPidCouponsPostBodyNormalizer;
use WapplerSystems\LearnWorldsApi\Model\V2PromotionsPidCouponsPostBody;
use WapplerSystems\LearnWorldsApi\Normalizer\V2PromotionsPidCouponsGetResponse200Normalizer;
use WapplerSystems\LearnWorldsApi\Model\V2PromotionsPidCouponsGetResponse200;
use WapplerSystems\LearnWorldsApi\Normalizer\V2UsersIdTagsPutBodyNormalizer;
use WapplerSystems\LearnWorldsApi\Model\V2UsersIdTagsPutBody;
use WapplerSystems\LearnWorldsApi\Normalizer\V2UsersIdProductsGetResponse200Normalizer;
use WapplerSystems\LearnWorldsApi\Model\V2UsersIdProductsGetResponse200;
use WapplerSystems\LearnWorldsApi\Normalizer\V2LeadsGetResponse200Normalizer;
use WapplerSystems\LearnWorldsApi\Model\V2LeadsGetResponse200;
use WapplerSystems\LearnWorldsApi\Normalizer\V2PaymentsGetResponse200Normalizer;
use WapplerSystems\LearnWorldsApi\Model\V2PaymentsGetResponse200;
use WapplerSystems\LearnWorldsApi\Normalizer\V2CoursesIdUsersGetResponse200Normalizer;
use WapplerSystems\LearnWorldsApi\Model\V2CoursesIdUsersGetResponse200;
use WapplerSystems\LearnWorldsApi\Normalizer\V2UsersIdCoursesGetResponse200Normalizer;
use WapplerSystems\LearnWorldsApi\Model\V2UsersIdCoursesGetResponse200;
use WapplerSystems\LearnWorldsApi\Normalizer\V2UsersGetResponse200Normalizer;
use WapplerSystems\LearnWorldsApi\Model\V2UsersGetResponse200;
use WapplerSystems\LearnWorldsApi\Normalizer\V2SchoolEventsGetResponse200Normalizer;
use WapplerSystems\LearnWorldsApi\Model\V2SchoolEventsGetResponse200;
use WapplerSystems\LearnWorldsApi\Normalizer\V2InstallmentsActiveGetResponse200Normalizer;
use WapplerSystems\LearnWorldsApi\Model\V2InstallmentsActiveGetResponse200;
use WapplerSystems\LearnWorldsApi\Normalizer\V2UserSubscriptionsGetResponse200Normalizer;
use WapplerSystems\LearnWorldsApi\Model\V2UserSubscriptionsGetResponse200;
use WapplerSystems\LearnWorldsApi\Normalizer\V2SubscriptionPlansGetResponse200Normalizer;
use WapplerSystems\LearnWorldsApi\Model\V2SubscriptionPlansGetResponse200;
use WapplerSystems\LearnWorldsApi\Normalizer\V2BundlesGetResponse200Normalizer;
use WapplerSystems\LearnWorldsApi\Model\V2BundlesGetResponse200;
use WapplerSystems\LearnWorldsApi\Normalizer\V2CoursesIdPutBodyNormalizer;
use WapplerSystems\LearnWorldsApi\Model\V2CoursesIdPutBody;
use WapplerSystems\LearnWorldsApi\Normalizer\V2CoursesPostBodyNormalizer;
use WapplerSystems\LearnWorldsApi\Model\V2CoursesPostBody;
use WapplerSystems\LearnWorldsApi\Normalizer\V2CoursesGetResponse200Normalizer;
use WapplerSystems\LearnWorldsApi\Model\V2CoursesGetResponse200;
use WapplerSystems\LearnWorldsApi\Normalizer\Response500Normalizer;
use WapplerSystems\LearnWorldsApi\Model\Response500;
use WapplerSystems\LearnWorldsApi\Normalizer\Response422ErrorsCompanyItemNormalizer;
use WapplerSystems\LearnWorldsApi\Model\Response422ErrorsCompanyItem;
use WapplerSystems\LearnWorldsApi\Normalizer\Response422ErrorsNormalizer;
use WapplerSystems\LearnWorldsApi\Model\Response422Errors;
use WapplerSystems\LearnWorldsApi\Normalizer\Response422Normalizer;
use WapplerSystems\LearnWorldsApi\Model\Response422;
use WapplerSystems\LearnWorldsApi\Normalizer\Response404Normalizer;
use WapplerSystems\LearnWorldsApi\Model\Response404;
use WapplerSystems\LearnWorldsApi\Normalizer\Response401Normalizer;
use WapplerSystems\LearnWorldsApi\Model\Response401;
use WapplerSystems\LearnWorldsApi\Normalizer\Response400Normalizer;
use WapplerSystems\LearnWorldsApi\Model\Response400;
use WapplerSystems\LearnWorldsApi\Normalizer\UserResponseAnswersItemNormalizer;
use WapplerSystems\LearnWorldsApi\Model\UserResponseAnswersItem;
use WapplerSystems\LearnWorldsApi\Normalizer\UserResponseNormalizer;
use WapplerSystems\LearnWorldsApi\Model\UserResponse;
use WapplerSystems\LearnWorldsApi\Normalizer\GradeLearningUnitNormalizer;
use WapplerSystems\LearnWorldsApi\Model\GradeLearningUnit;
use WapplerSystems\LearnWorldsApi\Normalizer\GradeNormalizer;
use WapplerSystems\LearnWorldsApi\Model\Grade;
use WapplerSystems\LearnWorldsApi\Normalizer\EventLogUserNormalizer;
use WapplerSystems\LearnWorldsApi\Model\EventLogUser;
use WapplerSystems\LearnWorldsApi\Normalizer\EventLogNormalizer;
use WapplerSystems\LearnWorldsApi\Model\EventLog;
use WapplerSystems\LearnWorldsApi\Normalizer\PayoutDueUpcomingNormalizer;
use WapplerSystems\LearnWorldsApi\Model\PayoutDueUpcoming;
use WapplerSystems\LearnWorldsApi\Normalizer\UserSegmentNormalizer;
use WapplerSystems\LearnWorldsApi\Model\UserSegment;
use WapplerSystems\LearnWorldsApi\Normalizer\PayoutCompletedCompletedByNormalizer;
use WapplerSystems\LearnWorldsApi\Model\PayoutCompletedCompletedBy;
use WapplerSystems\LearnWorldsApi\Normalizer\PayoutCompletedNormalizer;
use WapplerSystems\LearnWorldsApi\Model\PayoutCompleted;
use WapplerSystems\LearnWorldsApi\Normalizer\AffiliatePostRequestNormalizer;
use WapplerSystems\LearnWorldsApi\Model\AffiliatePostRequest;
use WapplerSystems\LearnWorldsApi\Normalizer\AffiliateNormalizer;
use WapplerSystems\LearnWorldsApi\Model\Affiliate;
use WapplerSystems\LearnWorldsApi\Normalizer\CertificateUpdateFormNormalizer;
use WapplerSystems\LearnWorldsApi\Model\CertificateUpdateForm;
use WapplerSystems\LearnWorldsApi\Normalizer\CertificateUpdateNormalizer;
use WapplerSystems\LearnWorldsApi\Model\CertificateUpdate;
use WapplerSystems\LearnWorldsApi\Normalizer\CertificateUserNormalizer;
use WapplerSystems\LearnWorldsApi\Model\CertificateUser;
use WapplerSystems\LearnWorldsApi\Normalizer\CertificateNormalizer;
use WapplerSystems\LearnWorldsApi\Model\Certificate;
use WapplerSystems\LearnWorldsApi\Normalizer\UserProgressWithCourseProgressPerSectionUnitItemUnitsItemNormalizer;
use WapplerSystems\LearnWorldsApi\Model\UserProgressWithCourseProgressPerSectionUnitItemUnitsItem;
use WapplerSystems\LearnWorldsApi\Normalizer\UserProgressWithCourseProgressPerSectionUnitItemNormalizer;
use WapplerSystems\LearnWorldsApi\Model\UserProgressWithCourseProgressPerSectionUnitItem;
use WapplerSystems\LearnWorldsApi\Normalizer\UserProgressWithCourseNormalizer;
use WapplerSystems\LearnWorldsApi\Model\UserProgressWithCourse;
use WapplerSystems\LearnWorldsApi\Normalizer\UserProgressProgressPerSectionUnitItemUnitsItemNormalizer;
use WapplerSystems\LearnWorldsApi\Model\UserProgressProgressPerSectionUnitItemUnitsItem;
use WapplerSystems\LearnWorldsApi\Normalizer\UserProgressProgressPerSectionUnitItemNormalizer;
use WapplerSystems\LearnWorldsApi\Model\UserProgressProgressPerSectionUnitItem;
use WapplerSystems\LearnWorldsApi\Normalizer\UserProgressNormalizer;
use WapplerSystems\LearnWorldsApi\Model\UserProgress;
use WapplerSystems\LearnWorldsApi\Normalizer\ProductNormalizer;
use WapplerSystems\LearnWorldsApi\Model\Product;
use WapplerSystems\LearnWorldsApi\Normalizer\UserRequestPutModelUtmsNormalizer;
use WapplerSystems\LearnWorldsApi\Model\UserRequestPutModelUtms;
use WapplerSystems\LearnWorldsApi\Normalizer\UserRequestPutModelFieldsNormalizer;
use WapplerSystems\LearnWorldsApi\Model\UserRequestPutModelFields;
use WapplerSystems\LearnWorldsApi\Normalizer\UserRequestPutModelNormalizer;
use WapplerSystems\LearnWorldsApi\Model\UserRequestPutModel;
use WapplerSystems\LearnWorldsApi\Normalizer\UserRequestModelUtmsNormalizer;
use WapplerSystems\LearnWorldsApi\Model\UserRequestModelUtms;
use WapplerSystems\LearnWorldsApi\Normalizer\UserRequestModelFieldsNormalizer;
use WapplerSystems\LearnWorldsApi\Model\UserRequestModelFields;
use WapplerSystems\LearnWorldsApi\Normalizer\UserRequestModelNormalizer;
use WapplerSystems\LearnWorldsApi\Model\UserRequestModel;
use WapplerSystems\LearnWorldsApi\Normalizer\EnrollmentNormalizer;
use WapplerSystems\LearnWorldsApi\Model\Enrollment;
use WapplerSystems\LearnWorldsApi\Normalizer\LeadNormalizer;
use WapplerSystems\LearnWorldsApi\Model\Lead;
use WapplerSystems\LearnWorldsApi\Normalizer\PromotionRequestModelCouponsItemNormalizer;
use WapplerSystems\LearnWorldsApi\Model\PromotionRequestModelCouponsItem;
use WapplerSystems\LearnWorldsApi\Normalizer\PromotionRequestModelNormalizer;
use WapplerSystems\LearnWorldsApi\Model\PromotionRequestModel;
use WapplerSystems\LearnWorldsApi\Normalizer\CouponUsageNormalizer;
use WapplerSystems\LearnWorldsApi\Model\CouponUsage;
use WapplerSystems\LearnWorldsApi\Normalizer\PromotionProductsItemNormalizer;
use WapplerSystems\LearnWorldsApi\Model\PromotionProductsItem;
use WapplerSystems\LearnWorldsApi\Normalizer\PromotionNormalizer;
use WapplerSystems\LearnWorldsApi\Model\Promotion;
use WapplerSystems\LearnWorldsApi\Normalizer\InstallmentNormalizer;
use WapplerSystems\LearnWorldsApi\Model\Installment;
use WapplerSystems\LearnWorldsApi\Normalizer\PaymentAffiliateNormalizer;
use WapplerSystems\LearnWorldsApi\Model\PaymentAffiliate;
use WapplerSystems\LearnWorldsApi\Normalizer\PaymentInstructorsItemNormalizer;
use WapplerSystems\LearnWorldsApi\Model\PaymentInstructorsItem;
use WapplerSystems\LearnWorldsApi\Normalizer\PaymentProductNormalizer;
use WapplerSystems\LearnWorldsApi\Model\PaymentProduct;
use WapplerSystems\LearnWorldsApi\Normalizer\PaymentNormalizer;
use WapplerSystems\LearnWorldsApi\Model\Payment;
use WapplerSystems\LearnWorldsApi\Normalizer\UserSubscriptionNormalizer;
use WapplerSystems\LearnWorldsApi\Model\UserSubscription;
use WapplerSystems\LearnWorldsApi\Normalizer\UnitAnalyticsNormalizer;
use WapplerSystems\LearnWorldsApi\Model\UnitAnalytics;
use WapplerSystems\LearnWorldsApi\Normalizer\CourseAnalyticsNormalizer;
use WapplerSystems\LearnWorldsApi\Model\CourseAnalytics;
use WapplerSystems\LearnWorldsApi\Normalizer\SectionRequestModelNormalizer;
use WapplerSystems\LearnWorldsApi\Model\SectionRequestModel;
use WapplerSystems\LearnWorldsApi\Normalizer\SchoolEventNormalizer;
use WapplerSystems\LearnWorldsApi\Model\SchoolEvent;
use WapplerSystems\LearnWorldsApi\Normalizer\UserFieldsNormalizer;
use WapplerSystems\LearnWorldsApi\Model\UserFields;
use WapplerSystems\LearnWorldsApi\Normalizer\UserRoleNormalizer;
use WapplerSystems\LearnWorldsApi\Model\UserRole;
use WapplerSystems\LearnWorldsApi\Normalizer\UserNormalizer;
use WapplerSystems\LearnWorldsApi\Model\User;
use WapplerSystems\LearnWorldsApi\Normalizer\CouponNormalizer;
use WapplerSystems\LearnWorldsApi\Model\Coupon;
use WapplerSystems\LearnWorldsApi\Normalizer\CourseContentSectionsItemLearningUnitsItemNormalizer;
use WapplerSystems\LearnWorldsApi\Model\CourseContentSectionsItemLearningUnitsItem;
use WapplerSystems\LearnWorldsApi\Normalizer\CourseContentSectionsItemNormalizer;
use WapplerSystems\LearnWorldsApi\Model\CourseContentSectionsItem;
use WapplerSystems\LearnWorldsApi\Normalizer\CourseContentNormalizer;
use WapplerSystems\LearnWorldsApi\Model\CourseContent;
use WapplerSystems\LearnWorldsApi\Normalizer\SubscriptionPlanAfterPurchaseSettingsNormalizer;
use WapplerSystems\LearnWorldsApi\Model\SubscriptionPlanAfterPurchaseSettings;
use WapplerSystems\LearnWorldsApi\Normalizer\SubscriptionPlanAfterPurchaseNormalizer;
use WapplerSystems\LearnWorldsApi\Model\SubscriptionPlanAfterPurchase;
use WapplerSystems\LearnWorldsApi\Normalizer\SubscriptionPlanProductsNormalizer;
use WapplerSystems\LearnWorldsApi\Model\SubscriptionPlanProducts;
use WapplerSystems\LearnWorldsApi\Normalizer\SubscriptionPlanNormalizer;
use WapplerSystems\LearnWorldsApi\Model\SubscriptionPlan;
use WapplerSystems\LearnWorldsApi\Normalizer\BundleAfterPurchaseSettingsNormalizer;
use WapplerSystems\LearnWorldsApi\Model\BundleAfterPurchaseSettings;
use WapplerSystems\LearnWorldsApi\Normalizer\BundleAfterPurchaseNormalizer;
use WapplerSystems\LearnWorldsApi\Model\BundleAfterPurchase;
use WapplerSystems\LearnWorldsApi\Normalizer\BundleProductsNormalizer;
use WapplerSystems\LearnWorldsApi\Model\BundleProducts;
use WapplerSystems\LearnWorldsApi\Normalizer\BundleNormalizer;
use WapplerSystems\LearnWorldsApi\Model\Bundle;
use WapplerSystems\LearnWorldsApi\Normalizer\MetaNormalizer;
use WapplerSystems\LearnWorldsApi\Model\Meta;
use WapplerSystems\LearnWorldsApi\Normalizer\CourseIdentifiersNormalizer;
use WapplerSystems\LearnWorldsApi\Model\CourseIdentifiers;
use WapplerSystems\LearnWorldsApi\Normalizer\CourseAfterPurchaseSettingsNormalizer;
use WapplerSystems\LearnWorldsApi\Model\CourseAfterPurchaseSettings;
use WapplerSystems\LearnWorldsApi\Normalizer\CourseAfterPurchaseNormalizer;
use WapplerSystems\LearnWorldsApi\Model\CourseAfterPurchase;
use WapplerSystems\LearnWorldsApi\Normalizer\CourseNormalizer;
use WapplerSystems\LearnWorldsApi\Model\Course;

class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    protected $normalizers = [Course::class => CourseNormalizer::class, CourseAfterPurchase::class => CourseAfterPurchaseNormalizer::class, CourseAfterPurchaseSettings::class => CourseAfterPurchaseSettingsNormalizer::class, CourseIdentifiers::class => CourseIdentifiersNormalizer::class, Meta::class => MetaNormalizer::class, Bundle::class => BundleNormalizer::class, BundleProducts::class => BundleProductsNormalizer::class, BundleAfterPurchase::class => BundleAfterPurchaseNormalizer::class, BundleAfterPurchaseSettings::class => BundleAfterPurchaseSettingsNormalizer::class, SubscriptionPlan::class => SubscriptionPlanNormalizer::class, SubscriptionPlanProducts::class => SubscriptionPlanProductsNormalizer::class, SubscriptionPlanAfterPurchase::class => SubscriptionPlanAfterPurchaseNormalizer::class, SubscriptionPlanAfterPurchaseSettings::class => SubscriptionPlanAfterPurchaseSettingsNormalizer::class, CourseContent::class => CourseContentNormalizer::class, CourseContentSectionsItem::class => CourseContentSectionsItemNormalizer::class, CourseContentSectionsItemLearningUnitsItem::class => CourseContentSectionsItemLearningUnitsItemNormalizer::class, Coupon::class => CouponNormalizer::class, User::class => UserNormalizer::class, UserRole::class => UserRoleNormalizer::class, UserFields::class => UserFieldsNormalizer::class, SchoolEvent::class => SchoolEventNormalizer::class, SectionRequestModel::class => SectionRequestModelNormalizer::class, CourseAnalytics::class => CourseAnalyticsNormalizer::class, UnitAnalytics::class => UnitAnalyticsNormalizer::class, UserSubscription::class => UserSubscriptionNormalizer::class, Payment::class => PaymentNormalizer::class, PaymentProduct::class => PaymentProductNormalizer::class, PaymentInstructorsItem::class => PaymentInstructorsItemNormalizer::class, PaymentAffiliate::class => PaymentAffiliateNormalizer::class, Installment::class => InstallmentNormalizer::class, Promotion::class => PromotionNormalizer::class, PromotionProductsItem::class => PromotionProductsItemNormalizer::class, CouponUsage::class => CouponUsageNormalizer::class, PromotionRequestModel::class => PromotionRequestModelNormalizer::class, PromotionRequestModelCouponsItem::class => PromotionRequestModelCouponsItemNormalizer::class, Lead::class => LeadNormalizer::class, Enrollment::class => EnrollmentNormalizer::class, UserRequestModel::class => UserRequestModelNormalizer::class, UserRequestModelFields::class => UserRequestModelFieldsNormalizer::class, UserRequestModelUtms::class => UserRequestModelUtmsNormalizer::class, UserRequestPutModel::class => UserRequestPutModelNormalizer::class, UserRequestPutModelFields::class => UserRequestPutModelFieldsNormalizer::class, UserRequestPutModelUtms::class => UserRequestPutModelUtmsNormalizer::class, Product::class => ProductNormalizer::class, UserProgress::class => UserProgressNormalizer::class, UserProgressProgressPerSectionUnitItem::class => UserProgressProgressPerSectionUnitItemNormalizer::class, UserProgressProgressPerSectionUnitItemUnitsItem::class => UserProgressProgressPerSectionUnitItemUnitsItemNormalizer::class, UserProgressWithCourse::class => UserProgressWithCourseNormalizer::class, UserProgressWithCourseProgressPerSectionUnitItem::class => UserProgressWithCourseProgressPerSectionUnitItemNormalizer::class, UserProgressWithCourseProgressPerSectionUnitItemUnitsItem::class => UserProgressWithCourseProgressPerSectionUnitItemUnitsItemNormalizer::class, Certificate::class => CertificateNormalizer::class, CertificateUser::class => CertificateUserNormalizer::class, CertificateUpdate::class => CertificateUpdateNormalizer::class, CertificateUpdateForm::class => CertificateUpdateFormNormalizer::class, Affiliate::class => AffiliateNormalizer::class, AffiliatePostRequest::class => AffiliatePostRequestNormalizer::class, PayoutCompleted::class => PayoutCompletedNormalizer::class, PayoutCompletedCompletedBy::class => PayoutCompletedCompletedByNormalizer::class, UserSegment::class => UserSegmentNormalizer::class, PayoutDueUpcoming::class => PayoutDueUpcomingNormalizer::class, EventLog::class => EventLogNormalizer::class, EventLogUser::class => EventLogUserNormalizer::class, Grade::class => GradeNormalizer::class, GradeLearningUnit::class => GradeLearningUnitNormalizer::class, UserResponse::class => UserResponseNormalizer::class, UserResponseAnswersItem::class => UserResponseAnswersItemNormalizer::class, Response400::class => Response400Normalizer::class, Response401::class => Response401Normalizer::class, Response404::class => Response404Normalizer::class, Response422::class => Response422Normalizer::class, Response422Errors::class => Response422ErrorsNormalizer::class, Response422ErrorsCompanyItem::class => Response422ErrorsCompanyItemNormalizer::class, Response500::class => Response500Normalizer::class, V2CoursesGetResponse200::class => V2CoursesGetResponse200Normalizer::class, V2CoursesPostBody::class => V2CoursesPostBodyNormalizer::class, V2CoursesIdPutBody::class => V2CoursesIdPutBodyNormalizer::class, V2BundlesGetResponse200::class => V2BundlesGetResponse200Normalizer::class, V2SubscriptionPlansGetResponse200::class => V2SubscriptionPlansGetResponse200Normalizer::class, V2UserSubscriptionsGetResponse200::class => V2UserSubscriptionsGetResponse200Normalizer::class, V2InstallmentsActiveGetResponse200::class => V2InstallmentsActiveGetResponse200Normalizer::class, V2SchoolEventsGetResponse200::class => V2SchoolEventsGetResponse200Normalizer::class, V2UsersGetResponse200::class => V2UsersGetResponse200Normalizer::class, V2UsersIdCoursesGetResponse200::class => V2UsersIdCoursesGetResponse200Normalizer::class, V2CoursesIdUsersGetResponse200::class => V2CoursesIdUsersGetResponse200Normalizer::class, V2PaymentsGetResponse200::class => V2PaymentsGetResponse200Normalizer::class, V2LeadsGetResponse200::class => V2LeadsGetResponse200Normalizer::class, V2UsersIdProductsGetResponse200::class => V2UsersIdProductsGetResponse200Normalizer::class, V2UsersIdTagsPutBody::class => V2UsersIdTagsPutBodyNormalizer::class, V2PromotionsPidCouponsGetResponse200::class => V2PromotionsPidCouponsGetResponse200Normalizer::class, V2PromotionsPidCouponsPostBody::class => V2PromotionsPidCouponsPostBodyNormalizer::class, V2UsersIdEnrollmentDeleteBody::class => V2UsersIdEnrollmentDeleteBodyNormalizer::class, V2UsersIdEnrollmentPostBody::class => V2UsersIdEnrollmentPostBodyNormalizer::class, V2UsersIdEnrollmentPostResponse200::class => V2UsersIdEnrollmentPostResponse200Normalizer::class, V2AffiliatesGetResponse200::class => V2AffiliatesGetResponse200Normalizer::class, V2AffiliatesIdLeadsGetResponse200::class => V2AffiliatesIdLeadsGetResponse200Normalizer::class, V2PromotionsGetResponse200::class => V2PromotionsGetResponse200Normalizer::class, V2PromotionsPostBody::class => V2PromotionsPostBodyNormalizer::class, V2PromotionsPostBodyProductsItem::class => V2PromotionsPostBodyProductsItemNormalizer::class, V2PromotionsPostResponse201::class => V2PromotionsPostResponse201Normalizer::class, V2PromotionsPostResponse201ProductsItem::class => V2PromotionsPostResponse201ProductsItemNormalizer::class, V2AffiliatesIdCustomersGetResponse200::class => V2AffiliatesIdCustomersGetResponse200Normalizer::class, V2AffiliatesIdPaymentsGetResponse200::class => V2AffiliatesIdPaymentsGetResponse200Normalizer::class, V2PaymentsIdInvoiceLinkGetResponse200::class => V2PaymentsIdInvoiceLinkGetResponse200Normalizer::class, V2UsersSegmentsGetResponse200::class => V2UsersSegmentsGetResponse200Normalizer::class, V2CertificatesGetResponse200::class => V2CertificatesGetResponse200Normalizer::class, V2UsersBySegmentGetResponse200::class => V2UsersBySegmentGetResponse200Normalizer::class, V2UsersByProductGetResponse200::class => V2UsersByProductGetResponse200Normalizer::class, V2AffiliatesIdPayoutsUpcomingGetResponse200::class => V2AffiliatesIdPayoutsUpcomingGetResponse200Normalizer::class, V2AffiliatesIdPayoutsDueGetResponse200::class => V2AffiliatesIdPayoutsDueGetResponse200Normalizer::class, V2AffiliatesIdPayoutsCompletedGetResponse200::class => V2AffiliatesIdPayoutsCompletedGetResponse200Normalizer::class, V2PromotionsIdCouponsBulkPostBody::class => V2PromotionsIdCouponsBulkPostBodyNormalizer::class, V2EventLogsGetResponse200::class => V2EventLogsGetResponse200Normalizer::class, V2UsersIdProgressGetResponse200::class => V2UsersIdProgressGetResponse200Normalizer::class, V2CoursesIdGradesGetResponse200::class => V2CoursesIdGradesGetResponse200Normalizer::class, V2AssessmentsIdResponsesGetResponse200::class => V2AssessmentsIdResponsesGetResponse200Normalizer::class, Reference::class => ReferenceNormalizer::class];
    protected $normalizersCache = [];

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return array_key_exists($type, $this->normalizers);
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
    }

    /**
     * @return array|string|int|float|bool|ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $normalizerClass = $this->normalizers[get_class($object)];
        $normalizer = $this->getNormalizer($normalizerClass);
        return $normalizer->normalize($object, $format, $context);
    }

    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $denormalizerClass = $this->normalizers[$class];
        $denormalizer = $this->getNormalizer($denormalizerClass);
        return $denormalizer->denormalize($data, $class, $format, $context);
    }

    private function getNormalizer(string $normalizerClass)
    {
        return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
    }

    private function initNormalizer(string $normalizerClass)
    {
        $normalizer = new $normalizerClass();
        $normalizer->setNormalizer($this->normalizer);
        $normalizer->setDenormalizer($this->denormalizer);
        $this->normalizersCache[$normalizerClass] = $normalizer;
        return $normalizer;
    }
}
