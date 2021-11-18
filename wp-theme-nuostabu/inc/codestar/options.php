<?php


// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

    //
    // Set a unique slug-like ID
    $prefix = 'nuostabu';

    //
    // Create options
    CSF::createOptions( $prefix, array(
        'menu_title' => 'Theme Options',
        'menu_slug'  => 'Theme-settings',
    ) );



    /**
     *Banner Section
     */
    CSF::createSection( $prefix, array(
        'title'  => 'Banner Settings',
        'fields' => array(
            array(
                'id'    => 'banner-title',
                'type'  => 'text',
                'title' => 'Type Banner Title',
                'default' => 'Eastern Partnership Youth Forum'
            ),
            array(
                'id'    => 'banner-subtitle',
                'type'  => 'text',
                'title' => 'Type Banner Subtitle',

                'default'=>'We all will meet in Vilnius on 17-20 June 2019!'
            ),

            array(
                'id'        => 'banner-image',
                'type'  => 'media',
                'title'     => 'Banner Select',
            ),


        )
    ) );


    /**
     *Comming in section
     */
    CSF::createSection( $prefix, array(
        'title'  => 'Remaining Time',
        'fields' => array(
            array(
                'id'    => 'remaining-title',
                'type'  => 'text',
                'title' => 'Type Title',
                'default'=>'REMAINING TIME'
            ),
            array(
                'id'    => 'remaining-day',
                'type'  => 'date',
                'title' => 'Choose Live Date',
                'subtitle' => 'Please select date',
            ),
            array(
                'id'    => 'remaining-time',
                'type'  => 'text',
                'title' => 'Select Time',
                'subtitle' => 'Time Formate :: (HH-MM-SS)',
                'default'=>'00:00:00'
            ),
        )
    ) );




    /**
     *Partnership Section
     */
    CSF::createSection( $prefix, array(
        'title'  => 'Eastern Partnership',
        'fields' => array(
            // Content check time
            array(
                'id'    => 'partner-title',
                'type'  => 'text',
                'title' => 'Type  Title',
                'default'=>'The main objectives of the ',
            ),
            array(
                'id'    => 'partner-subtitle',
                'type'  => 'text',
                'title' => 'Type  Subtitle',
                'default'=>'4th Eastern Partnership Youth Forum',
            ),


            /*Repeter Field start
             * */
            array(
                'id'     => 'main-objectives',
                'type'   => 'repeater',
                'title'  => 'Main Objective List',
                'fields' => array(

                            array(
                                'id'        => 'objective-icon',
                                'type'  => 'media',
                                'title'     => 'Upload a icon',
                            ),
                            array(
                                'id'    => 'ob-icon-bg',
                                'type'  => 'color',
                                'title' => 'Icon Background Color',
                                'default' =>'#F0F3FF;'
                            ),
                            array(
                                'id'      => 'object-details',
                                'type'    => 'textarea',
                                'title'   => 'Object Content',
                                'default' =>'Loren Ipsum donor'
                            ),
                ),
            ),

            /*Repeter Field End
             * */




        )
    ) );

    /**
     * Asset Section
     */
    CSF::createSection( $prefix, array(
        'title'  => 'Asset Section',
        'fields' => array(


            array(
                'id'            => 'asset-tabs',
                'type'          => 'tabbed',
                'title'         => 'Assets Options',
                'tabs'          => array(
                    array(
                        'title'     => 'Participants',
                        'icon'      => 'fa fa-users',
                        'fields'    => array(
                            array(
                                'id'    => 'part-count',
                                'type'  => 'number',
                                'title' => 'Participants Number',
                                'default' => 250
                            ),
                            array(
                                'id'    => 'part-title',
                                'type'  => 'text',
                                'title' => 'Title',
                                'default' => 'participants',
                            ),
                            array(
                                'id'    => 'part-content',
                                'type'  => 'textarea',
                                'title' => 'Description',
                                'default' => 'including active young people, youth workers and youth policy makers from both Eastern Partnership',
                            ),
                        )
                    ),
                    array(
                        'title'     => 'Countries',
                        'icon'      => 'fa fa-flag',
                        'fields'    => array(
                            array(
                                'id'    => 'country-count',
                                'type'  => 'number',
                                'title' => 'Participants Number',
                                'default' => 34
                            ),
                            array(
                                'id'    => 'country-title',
                                'type'  => 'text',
                                'title' => 'Title',
                                'default' => 'Countries',
                            ),
                            array(
                                'id'    => 'country-content',
                                'type'  => 'textarea',
                                'title' => 'Description',
                                'default' => 'European countries involved in the EU Erasmus',
                            ),
                        )
                    ),
                    array(
                        'title'     => 'Days',
                        'icon'      => 'fa fa-calendar-day',
                        'fields'    => array(
                            array(
                                'id'    => 'days-count',
                                'type'  => 'number',
                                'title' => 'Participants Number',
                                'default' => 3
                            ),
                            array(
                                'id'    => 'days-title',
                                'type'  => 'text',
                                'title' => 'Title',
                                'default' => 'Days',
                            ),
                            array(
                                'id'    => 'days-content',
                                'type'  => 'textarea',
                                'title' => 'Description',
                                'default' => 'Programme — will meet and discuss in a two-day event in Vilnius, on 17-20 June 2018.',
                            ),
                        )
                    ),
                )
            ),


        )
    ) );

    /**
     * Map Section
     */
    CSF::createSection( $prefix, array(
        'title'  => 'Map Section',
        'fields' => array(
            array(
                'id'       => 'map-sec-iframe',
                'type'     => 'wp_editor',
                'title'    => 'Iframe Code',
                'sanitize' => false,
                'desc'=> 'If you choose iframe Map image will auto hide.'
            ),

            array(
                'id'    => 'map-img-bg',
                'type'  => 'media',
                'title' => 'Map Image',
            ),

        )
    ) );


    /**
     * About SEction 1
     */
    CSF::createSection( $prefix, array(
        'title'  => 'About Forum',
        'fields' => array(

            array(
                'id'    => 'about1-title',
                'type'  => 'text',
                'title' => 'Type  Title',
                'default' =>'About Forum'
            ),
            array(
                'id'    => 'aboout1-subtitle',
                'type'  => 'text',
                'title' => 'Type  Subtitle',
                'default' =>'We all will meet in Vilnius on 17-20 June 2019!'
            ),
            array(
                'id'      => 'about1-details',
                'type'    => 'textarea',
                'title'   => 'About Details Content',
                'default' =>'The event will gather youth and youth work representatives, around 250 participants: each EaP country with 10 delegates from youth, organizations and institutions working with youth, EaP Youth ambassadors network representatives, 34 “Erasmus+” programme countries with 2 delegates per country, team of facilitators and experts, other European Union, Council of Europe, national agency and international youth organizations representatives.'
            ),
            array(
                'id'    => 'about1-link',
                'type'  => 'link',
                'title' => 'Button Link',
            ),

            array(
                'id'    => 'about1-mapi',
                'type'  => 'text',
                'title' => 'Map',
                'sanitize'=>false,
            ),

        )
    ) );


    /**
     * About SEction 2
     */
    CSF::createSection( $prefix, array(
        'title'  => 'About Lithuania',
        'fields' => array(

            array(
                'id'    => 'about2-title',
                'type'  => 'text',
                'title' => 'Type  Title',
                'default'=>'About Lithuania'
            ),
            array(
                'id'    => 'aboout2-subtitle',
                'type'  => 'text',
                'title' => 'Type  Subtitle',
                'default'=>'Lithuania is a country in Northern Europe'
            ),
            array(
                'id'      => 'about2-details',
                'type'    => 'textarea',
                'title'   => 'About Details Content',
                'default' => 'The official name of the country is the Republic of Lithuania. Lithuania is situated on the eastern shore of the Baltic Sea and borders Latvia on the north, Belarus on the east and south, and Poland and the Kaliningrad region of Russia on the southwest. The official language is Lithuanian. Vilnius is the capital of Lithuania and its largest city. It is known for its baroque architecture, seen especially in its medieval old town. '
            ),
            array(
                'id'    => 'about2-link',
                'type'  => 'link',
                'title' => 'Button Link',
            ),

            array(
                'id'    => 'about2-image',
                'type'  => 'media',
                'title' => 'Select Side Image',
            ),

        )
    ) );


    /**
     *Moderator  Section
     */
    CSF::createSection( $prefix, array(
        'title'  => 'Moderators & Facilitators',
        'fields' => array(

            array(
                'id'      => 'moderators-title',
                'type'    => 'text',
                'title'   => 'Title',
                'default' => 'Moderators and Facilitators '
            ),


            /*Repeter Field start
             * */
            array(
                'id'     => 'moderator-list',
                'type'   => 'repeater',
                'title'  => 'Modarator list',
                'fields' => array(

                    array(
                        'id'        => 'modarator-image',
                        'type'  => 'media',
                        'title'     => 'Modarator Image',
                    ),
                    array(
                        'id'        => 'moderator-country',
                        'type'      => 'image_select',
                        'title'     => 'Select Contry Flag',
                        'options'   => array(
                            'value-1' =>  get_template_directory_uri(). '/assets/img/value-1.png',
                            'value-2' =>  get_template_directory_uri(). '/assets/img/value-2.png',
                        ),
                        'default'   => 'value-2'
                    ),

                    array(
                        'id'      => 'modarator-name',
                        'type'    => 'text',
                        'title'   => 'Name',
                    ),
                    array(
                        'id'      => 'modarator-postion-location',
                        'type'    => 'text',
                        'title'   => 'Details with location',
                    ),
                ),
            ),

            /*Repeter Field End
             * */
        )
    ) );


    /**
     *Organizer Section
     */
    CSF::createSection( $prefix, array(
        'title'  => 'Organisers Section',
        'fields' => array(
            // Content check time

            array(
                'id'      => 'organizer-title',
                'type'    => 'text',
                'title'   => 'Title',
                'default' => 'Organisers'
            ),


            array(
                'id'    => 'organizer-logos',
                'type'  => 'gallery',
                'title' => 'Upload Organizer Logos',
            ),

        )
    ) );

    /**
     *Partners Section
     */
    CSF::createSection( $prefix, array(
        'title'  => 'Partners Section',
        'fields' => array(
            // Content check time

            array(
                'id'      => 'partners-title',
                'type'    => 'text',
                'title'   => 'Title',
                'default' => 'Partners'
            ),


            array(
                'id'    => 'partners-logos',
                'type'  => 'gallery',
                'title' => 'Upload Partner Logos',
            ),

        )
    ) );

    /**
     *Partners Section
     */
    CSF::createSection( $prefix, array(
        'title'  => 'Footer Section',
        'fields' => array(
            // Content check time

            array(
                'id'      => 'copyright-title',
                'type'    => 'text',
                'title'   => 'Copyright Content',
                'default' => '&copy; Loren Ipsum 2021'
            ),

            array(
                'id'      => 'fb-link',
                'type'    => 'text',
                'title'   => 'Facebook URL',
                'default' => '#'
            ),
            array(
                'id'      => 'ig-link',
                'type'    => 'text',
                'title'   => 'Instagram URL',
                'default' => '#'
            ),



        )
    ) );


    //
    // Create a section
//    CSF::createSection( $prefix, array(
//        'title'  => 'Tab Title 2',
//        'fields' => array(
//
//            // A textarea field
//            array(
//                'id'    => 'opt-textarea',
//                'type'  => 'textarea',
//                'title' => 'Simple Textarea',
//            ),
//
//        )
//    ) );

}
