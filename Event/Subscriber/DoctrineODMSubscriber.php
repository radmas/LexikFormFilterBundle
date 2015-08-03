<?php

namespace Lexik\Bundle\FormFilterBundle\Event\Subscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Register listeners to compute conditions to be applied on a Doctrine ODM query builder.
 *
 * @author Cédric Girard <c.girard@lexik.fr>
 */
class DoctrineODMSubscriber extends AbstractDoctrineSubscriber implements EventSubscriberInterface
{
    /**
     * {@inheritDoc}
     */
    public static function getSubscribedEvents()
    {
        return array(
            // Lexik form filter types
            'lexik_form_filter.apply.odm.filter_boolean'        => array('filterBoolean'),
            'lexik_form_filter.apply.odm.filter_checkbox'       => array('filterCheckbox'),
            'lexik_form_filter.apply.odm.filter_choice'         => array('filterValue'),
            'lexik_form_filter.apply.odm.filter_date'           => array('filterDate'),
            'lexik_form_filter.apply.odm.filter_date_range'     => array('filterDateRange'),
            'lexik_form_filter.apply.odm.filter_datetime'       => array('filterDateTime'),
            'lexik_form_filter.apply.odm.filter_datetime_range' => array('filterDateTimeRange'),
            'lexik_form_filter.apply.odm.filter_number'         => array('filterNumber'),
            'lexik_form_filter.apply.odm.filter_number_range'   => array('filterNumberRange'),
            'lexik_form_filter.apply.odm.filter_text'           => array('filterText'),

            // Symfony2 types
            'lexik_form_filter.apply.odm.text'     => array('filterText'),
            'lexik_form_filter.apply.odm.email'    => array('filterValue'),
            'lexik_form_filter.apply.odm.integer'  => array('filterValue'),
            'lexik_form_filter.apply.odm.money'    => array('filterValue'),
            'lexik_form_filter.apply.odm.number'   => array('filterValue'),
            'lexik_form_filter.apply.odm.percent'  => array('filterValue'),
            'lexik_form_filter.apply.odm.search'   => array('filterValue'),
            'lexik_form_filter.apply.odm.url'      => array('filterValue'),
            'lexik_form_filter.apply.odm.choice'   => array('filterValue'),
            'lexik_form_filter.apply.odm.country'  => array('filterValue'),
            'lexik_form_filter.apply.odm.language' => array('filterValue'),
            'lexik_form_filter.apply.odm.locale'   => array('filterValue'),
            'lexik_form_filter.apply.odm.timezone' => array('filterValue'),
            'lexik_form_filter.apply.odm.date'     => array('filterDate'),
            'lexik_form_filter.apply.odm.datetime' => array('filterDate'),
            'lexik_form_filter.apply.odm.birthday' => array('filterDate'),
            'lexik_form_filter.apply.odm.checkbox' => array('filterValue'),
            'lexik_form_filter.apply.odm.radio'    => array('filterValue'),
        );
    }
}
