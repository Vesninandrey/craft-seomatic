<?php
/**
 * SEOmatic plugin for Craft CMS 3.x
 *
 * A turnkey SEO implementation for Craft CMS that is comprehensive, powerful,
 * and flexible
 *
 * @link      https://nystudio107.com
 * @copyright Copyright (c) 2017 nystudio107
 */

namespace nystudio107\seomatic\models\jsonld;

use nystudio107\seomatic\models\jsonld\Intangible;

/**
 * Rating - A rating is an evaluation on a numeric scale, such as 1 to 5
 * stars.
 *
 * @author    nystudio107
 * @package   Seomatic
 * @since     3.0.0
 * @see       http://schema.org/Rating
 */
class Rating extends Intangible
{
    // Static Public Properties
    // =========================================================================

    /**
     * The Schema.org Type Name
     *
     * @var string
     */
    static public $schemaTypeName = 'Rating';

    /**
     * The Schema.org Type Scope
     *
     * @var string
     */
    static public $schemaTypeScope = 'https://schema.org/Rating';

    /**
     * The Schema.org Type Description
     *
     * @var string
     */
    static public $schemaTypeDescription = 'A rating is an evaluation on a numeric scale, such as 1 to 5 stars.';

    /**
     * The Schema.org Type Extends
     *
     * @var string
     */
    static public $schemaTypeExtends = 'Intangible';

    /**
     * The Schema.org composed Property Names
     *
     * @var array
     */
    static public $schemaPropertyNames = [];

    /**
     * The Schema.org composed Property Expected Types
     *
     * @var array
     */
    static public $schemaPropertyExpectedTypes = [];

    /**
     * The Schema.org composed Property Descriptions
     *
     * @var array
     */
    static public $schemaPropertyDescriptions = [];

    /**
     * The Schema.org composed Google Required Schema for this type
     *
     * @var array
     */
    static public $googleRequiredSchema = [];

    /**
     * The Schema.org composed Google Recommended Schema for this type
     *
     * @var array
     */
    static public $googleRecommendedSchema = [];

    // Public Properties
    // =========================================================================

    /**
     * The author of this content or rating. Please note that author is special in
     * that HTML 5 provides a special mechanism for indicating authorship via the
     * rel tag. That is equivalent to this and may be used interchangeably.
     *
     * @var mixed|Organization|Person [schema.org types: Organization, Person]
     */
    public $author;

    /**
     * The highest value allowed in this rating system. If bestRating is omitted,
     * 5 is assumed.
     *
     * @var mixed|float|string [schema.org types: Number, Text]
     */
    public $bestRating;

    /**
     * A short explanation (e.g. one to two sentences) providing background
     * context and other information that led to the conclusion expressed in the
     * rating. This is particularly applicable to ratings associated with "fact
     * check" markup using ClaimReview.
     *
     * @var string [schema.org types: Text]
     */
    public $ratingExplanation;

    /**
     * The rating for the content. Usage guidelines: Use values from 0123456789
     * (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE' (U+0039)) rather than
     * superficially similiar Unicode symbols. Use '.' (Unicode 'FULL STOP'
     * (U+002E)) rather than ',' to indicate a decimal point. Avoid using these
     * symbols as a readability separator.
     *
     * @var mixed|float|string [schema.org types: Number, Text]
     */
    public $ratingValue;

    /**
     * This Review or Rating is relevant to this part or facet of the
     * itemReviewed.
     *
     * @var string [schema.org types: Text]
     */
    public $reviewAspect;

    /**
     * The lowest value allowed in this rating system. If worstRating is omitted,
     * 1 is assumed.
     *
     * @var mixed|float|string [schema.org types: Number, Text]
     */
    public $worstRating;

    // Static Protected Properties
    // =========================================================================

    /**
     * The Schema.org Property Names
     *
     * @var array
     */
    static protected $_schemaPropertyNames = [
        'author',
        'bestRating',
        'ratingExplanation',
        'ratingValue',
        'reviewAspect',
        'worstRating'
    ];

    /**
     * The Schema.org Property Expected Types
     *
     * @var array
     */
    static protected $_schemaPropertyExpectedTypes = [
        'author' => ['Organization','Person'],
        'bestRating' => ['Number','Text'],
        'ratingExplanation' => ['Text'],
        'ratingValue' => ['Number','Text'],
        'reviewAspect' => ['Text'],
        'worstRating' => ['Number','Text']
    ];

    /**
     * The Schema.org Property Descriptions
     *
     * @var array
     */
    static protected $_schemaPropertyDescriptions = [
        'author' => 'The author of this content or rating. Please note that author is special in that HTML 5 provides a special mechanism for indicating authorship via the rel tag. That is equivalent to this and may be used interchangeably.',
        'bestRating' => 'The highest value allowed in this rating system. If bestRating is omitted, 5 is assumed.',
        'ratingExplanation' => 'A short explanation (e.g. one to two sentences) providing background context and other information that led to the conclusion expressed in the rating. This is particularly applicable to ratings associated with "fact check" markup using ClaimReview.',
        'ratingValue' => 'The rating for the content. Usage guidelines: Use values from 0123456789 (Unicode \'DIGIT ZERO\' (U+0030) to \'DIGIT NINE\' (U+0039)) rather than superficially similiar Unicode symbols. Use \'.\' (Unicode \'FULL STOP\' (U+002E)) rather than \',\' to indicate a decimal point. Avoid using these symbols as a readability separator.',
        'reviewAspect' => 'This Review or Rating is relevant to this part or facet of the itemReviewed.',
        'worstRating' => 'The lowest value allowed in this rating system. If worstRating is omitted, 1 is assumed.'
    ];

    /**
     * The Schema.org Google Required Schema for this type
     *
     * @var array
     */
    static protected $_googleRequiredSchema = [
    ];

    /**
     * The Schema.org composed Google Recommended Schema for this type
     *
     * @var array
     */
    static protected $_googleRecommendedSchema = [
    ];

    // Public Methods
    // =========================================================================

    /**
    * @inheritdoc
    */
    public function init()
    {
        parent::init();
        self::$schemaPropertyNames = array_merge(
            parent::$schemaPropertyNames,
            self::$_schemaPropertyNames
        );

        self::$schemaPropertyExpectedTypes = array_merge(
            parent::$schemaPropertyExpectedTypes,
            self::$_schemaPropertyExpectedTypes
        );

        self::$schemaPropertyDescriptions = array_merge(
            parent::$schemaPropertyDescriptions,
            self::$_schemaPropertyDescriptions
        );

        self::$googleRequiredSchema = array_merge(
            parent::$googleRequiredSchema,
            self::$_googleRequiredSchema
        );

        self::$googleRecommendedSchema = array_merge(
            parent::$googleRecommendedSchema,
            self::$_googleRecommendedSchema
        );
    }

    /**
    * @inheritdoc
    */
    public function rules()
    {
        $rules = parent::rules();
        $rules = array_merge($rules, [
            [['author','bestRating','ratingExplanation','ratingValue','reviewAspect','worstRating'], 'validateJsonSchema'],
            [self::$_googleRequiredSchema, 'required', 'on' => ['google'], 'message' => 'This property is required by Google.'],
            [self::$_googleRecommendedSchema, 'required', 'on' => ['google'], 'message' => 'This property is recommended by Google.']
        ]);

        return $rules;
    }
}
