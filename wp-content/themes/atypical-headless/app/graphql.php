<?php

add_action( 'graphql_register_types',  function () {

  register_graphql_object_type( 'Inspection', [
    'description' => __( 'Box & Dice Property Meta', 'wp-graphql' ),
    'fields' => [
      'inspection_date' => ['type' => 'String'],
      'start_time' => ['type' => 'String'],
      'end_time' => ['type' => 'String']
    ]
  ]);

  register_graphql_object_type( 'PropertyMeta', [
    'description' => __( 'Box & Dice Property Meta', 'wp-graphql' ),
    'fields' => [
      'unit' => ['type' => 'String'],
      'number' => ['type' => 'String'],
      'street_name' => ['type' => 'String'],
      'street_type' => ['type' => 'String'],
      'suburb' => ['type' => 'String'],
      'postcode' => ['type' => 'String'],
      'state' => ['type' => 'String'],
      'country' => ['type' => 'String'],
      'latitude' => ['type' => 'Float'],
      'longitude' => ['type' => 'Float'],
      'property_type_id' => ['type' => 'Integer'],
      'beds' => ['type' => 'Integer'],
      'baths' => ['type' => 'Integer'],
      'garages' => ['type' => 'Integer'],
      'cars' => ['type' => 'Integer'],
      'open_spaces' => ['type' => 'Integer'],
      'land_size' => ['type' => 'String'],
      'land_measure' => ['type' => 'String'],
      'property_styles' => ['type' => ['list_of' => 'String']],
      'property_views' => ['type' => ['list_of' => 'String']],
      'property_materials' => ['type' => ['list_of' => 'String']],
      'property_features' => ['type' => ['list_of' => 'String']],
      'tags' => ['type' => ['list_of' => 'String']]
    ]
  ]);

  register_graphql_object_type( 'PropertyImage', [
    'description' => __( 'Box & Dice Property Image', 'wp-graphql' ),
    'fields' => [
      'index' => ['type' => 'String'],
      'url' => ['type' => 'String']
    ]
  ]);

  register_graphql_object_type( 'PropertyContent', [
    'description' => __( 'Box & Dice Property Content', 'wp-graphql' ),
    'fields' => [
      'heading' => ['type' => 'String'],
      'text' => ['type' => 'String']
    ]
  ]);

  register_graphql_object_type( 'OtherLink', [
    'description' => __( 'Box & Dice Property Meta', 'wp-graphql' ),
    'fields' => [
      'label' => ['type' => 'String'],
      'url' => ['type' => 'String']
    ]
  ]);

  register_graphql_object_type( 'PropertyData', [
    'description' => __( 'Box & Dice Property', 'wp-graphql' ),
    'fields' => [
      'id' => ['type' => 'Integer'],
      'office_id' => ['type' => 'Integer'],
      'status' => ['type' => 'String'],
      'consultant_ids' => ['type' => ['list_of' => 'Integer']],
      'primary_consultant_id' => ['type' => 'Integer'],
      'listing_type' => ['type' => 'String'],
      'project_listing' => ['type' => 'Boolean'],
      'hidden' => ['type' => 'Boolean'],
      'price_undisclosed' => ['type' => 'Boolean'],
      'suburb_undisclosed' => ['type' => 'Boolean'],
      'sale_price' => ['type' => 'Float'],
      'campaign_start_date' => ['type' => 'String'],
      'under_offer' => ['type' => 'Boolean'],
      'auction' => ['type' => 'Boolean'],
      'price_from' => ['type' => 'String'],
      'price_to' => ['type' => 'String'],
      'display_price' => ['type' => 'String'],
      'situation_very_sensitive' => ['type' => 'Boolean'],
      'source' => ['type' => 'String'],
      'date_listed' => ['type' => 'String'],
      'website_status' => ['type' => 'String'],
      'soi_file' => ['type' => 'String'],
      'virtual_tour_url' => ['type' => 'String'],
      'video_link_url' => ['type' => 'String'],
      'interactive_floor_plan_url' => ['type' => 'String']
    ]
  ]);

  register_graphql_object_type( 'RentalData', [
    'description' => __( 'Box & Dice Property', 'wp-graphql' ),
    'fields' => [
      'id' => ['type' => 'Integer'],
      'office_id' => ['type' => 'Integer'],
      'status' => ['type' => 'String'],
      'consultant_ids' => ['type' => ['list_of' => 'Integer']],
      'primary_consultant_id' => ['type' => 'Integer'],
      'rental_type' => ['type' => 'String'],
      'hidden' => ['type' => 'Boolean'],
      'price_undisclosed' => ['type' => 'Boolean'],
      'address_undisclosed' => ['type' => 'Boolean'],
      'price_period' => ['type' => 'String'],
      'leased_duration' => ['type' => 'String'],
      'date_available' => ['type' => 'String'],
      'date_listed' => ['type' => 'String'],
      'action_date_on' => ['type' => 'String'],
      'price_from' => ['type' => 'String'],
      'price_to' => ['type' => 'String'],
      'display_price' => ['type' => 'String'],
      'situation_very_sensitive' => ['type' => 'Boolean'],
      'source' => ['type' => 'String'],
      'date_listed' => ['type' => 'String'],
      'date_offmarket' => ['type' => 'String'],
      'date_withdrawn' => ['type' => 'String'],
      'virtual_tour_url' => ['type' => 'String'],
      'video_link_url' => ['type' => 'String'],
    ]
  ]);

  register_graphql_object_type( 'TeamMemberData', [
    'description' => __( 'Box & Dice Team Data', 'wp-graphql' ),
    'fields' => [
      'id' => ['type' => 'Integer'],
      'office_id' => ['type' => 'Integer'],
      'first_name' => ['type' => 'String'],
      'last_name' => ['type' => 'String'],
      'mobile' => ['type' => 'String'],
      'phone_bh' => ['type' => 'String'],
      'email' => ['type' => 'String'],
      'profile' => ['type' => 'String'],
      'profile_url' => ['type' => 'String'],
      'position' => ['type' => 'String'],
      'avatar_url' => ['type' => 'String'],
      'staff_image_url' => ['type' => 'String']
    ]
  ]);

  register_graphql_field(
    'Property',
    'property_meta',
    [
      'type' => 'PropertyMeta',
      'description' => __( 'Property Meta from Box & Dice', 'wp-graphql' ),
      'resolve'     => function( $post ) {
        $box_data = get_post_meta( $post->ID, 'box_data', true );
        return $box_data->property;
      },
    ]
  );

  register_graphql_field(
    'Rental',
    'property_meta',
    [
      'type' => 'PropertyMeta',
      'description' => __( 'Property Meta from Box & Dice', 'wp-graphql' ),
      'resolve'     => function( $post ) {
        $box_data = get_post_meta( $post->ID, 'box_data', true );
        return $box_data->property;
      },
    ]
  );

  register_graphql_field(
    'Property',
    'property_content',
    [
      'type' => 'PropertyContent',
      'description' => __( 'Property Meta from Box & Dice', 'wp-graphql' ),
      'resolve'     => function( $post ) {
        $box_data = get_post_meta( $post->ID, 'box_data', true );
        return $box_data->advertising_copy;
      },
    ]
  );

  register_graphql_field(
    'Rental',
    'property_content',
    [
      'type' => 'PropertyContent',
      'description' => __( 'Property Meta from Box & Dice', 'wp-graphql' ),
      'resolve'     => function( $post ) {
        $box_data = get_post_meta( $post->ID, 'box_data', true );
        return $box_data->advertising_copy;
      },
    ]
  );

  register_graphql_field(
    'Property',
    'property_links',
    [
      'type' => ['list_of' => 'OtherLink'],
      'description' => __( 'Property Links from Box & Dice', 'wp-graphql' ),
      'resolve'     => function( $post ) {
        $box_data = get_post_meta( $post->ID, 'box_data', true );
        return $box_data->other_links;
      },
    ]
  );

  register_graphql_field(
    'Property',
    'property_inspections',
    [
      'type'        => ['list_of' => 'Inspection'],
      'description' => __( 'Property Inspections from Box & Dice', 'wp-graphql' ),
      'resolve'     => function( $post ) {
        $box_data = get_post_meta( $post->ID, 'box_data', true );
        if (empty($box_data->inspections)) {
          $box_data->inspections = [['inspection_date'=>'','start_time'=>'','end_time'=>'']];
        }
        return $box_data->inspections;
      },
    ]
  );

  register_graphql_field(
    'Rental',
    'property_inspections',
    [
      'type'        => ['list_of' => 'Inspection'],
      'description' => __( 'Property Inspections from Box & Dice', 'wp-graphql' ),
      'resolve'     => function( $post ) {
        $box_data = get_post_meta( $post->ID, 'box_data', true );
        if (empty($box_data->inspections)) {
          $box_data->inspections = [['inspection_date'=>'','start_time'=>'','end_time'=>'']];
        }
        return $box_data->inspections;
      },
    ]
  );

  register_graphql_field(
    'Property',
    'property_images',
    [
      'type'        => ['list_of' => 'PropertyImage'],
      'description' => __( 'Property Images from Box & Dice', 'wp-graphql' ),
      'resolve'     => function( $post ) {
        $box_data = get_post_meta( $post->ID, 'box_data', true );
        return $box_data->images;
      },
    ]
  );

  register_graphql_field(
    'Rental',
    'property_images',
    [
      'type'        => ['list_of' => 'PropertyImage'],
      'description' => __( 'Property Images from Box & Dice', 'wp-graphql' ),
      'resolve'     => function( $post ) {
        $box_data = get_post_meta( $post->ID, 'box_data', true );
        return $box_data->images;
      },
    ]
  );

  register_graphql_field(
    'Property',
    'property_data',
    [
      'type'        => 'PropertyData',
      'description' => __( 'Property Data from Box & Dice', 'wp-graphql' ),
      'resolve'     => function( $post ) {
        $box_data = get_post_meta( $post->ID, 'box_data', true );
        if (!isset($box_data->soi_file)) {
          $box_data->soi_file = '';
        }
        return $box_data;
      },
    ]
  );

  register_graphql_field(
    'Rental',
    'property_data',
    [
      'type'        => 'RentalData',
      'description' => __( 'Property Data from Box & Dice', 'wp-graphql' ),
      'resolve'     => function( $post ) {
        $box_data = get_post_meta( $post->ID, 'box_data', true );
        return $box_data;
      },
    ]
  );

  register_graphql_field(
    'Property',
    'box_id',
    [
      'type'        => 'Integer',
      'description' => __( 'Property Box & Dice id', 'wp-graphql' ),
      'resolve'     => function( $post ) {
        $box_id = get_post_meta( $post->ID, 'box_id', true );
        return $box_id;
      },
    ]
  );

  register_graphql_field(
    'Rental',
    'box_id',
    [
      'type'        => 'Integer',
      'description' => __( 'Rental Box & Dice id', 'wp-graphql' ),
      'resolve'     => function( $post ) {
        $box_id = get_post_meta( $post->ID, 'box_id', true );
        return $box_id;
      },
    ]
  );

  register_graphql_field(
    'TeamMember',
    'team_data',
    [
      'type'        => 'TeamMemberData',
      'description' => __( 'Team Data from Box & Dice', 'wp-graphql' ),
      'resolve'     => function( $post ) {
        $box_data = get_post_meta( $post->ID, 'box_data', true );
        return $box_data;
      },
    ]
  );

  register_graphql_field(
    'TeamMember',
    'box_id',
    [
      'type'        => 'Integer',
      'description' => __( 'Team data from Box & Dice id', 'wp-graphql' ),
      'resolve'     => function( $post ) {
        $box_id = get_post_meta( $post->ID, 'box_id', true );
        return $box_id;
      },
    ]
  );

});


