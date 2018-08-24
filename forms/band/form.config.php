<?php namespace JF;
/**

Copyright 2017 JQueryForm.com
License: http://www.jqueryform.com/license.php

FormID:  jqueryform-10965a
Date:    2017-04-17 08:55:09
Version: v1.3
Generated by http://www.jqueryform.com

PHP 5.3+ is required.
If mailgun is used AND the form has file upload field, PHP 5.5+ is required.

*/

class Config {
	private static $config;

    public static function getConfig( $decode = true ){
    	self::$config = self::_getConfig( $decode );
    	self::overwriteConfig();
    	return self::$config;
    }

    private static function _getConfig( $decode = true ){
        ob_start();
        // ---------------------------------------------------------------------
        // JSON format config
        // Note: please make a copy before you edit config manually
        // ---------------------------------------------------------------------

/**JSON_START**/ ?>
{
    "formId": "jqueryform-10965a",
    "email": {
        "to": "tonyraydeal@gmail.com",
        "cc": "jenniedeal@gmail.com",
        "bcc": "ray@rayjnorris.com",
        "subject": "Band Competition Registration",
        "template": "",
        "sendmail_from": "ray@rayjnorris.com"
    },
    "admin": {
        "users": "admin:79968",
        "dataDelivery": "emailAndFile",
        "save2dbExample": true
    },
    "thankyou": {
        "url": "",
        "message": "",
        "seconds": "10"
    },
    "seo": {
        "trackerId": "",
        "title": "",
        "description": "",
        "keywords": "",
        "author": ""
    },
    "mailer": "smtp",
    "smtp": {
        "host": "smtp.gmail.com",
        "user": "ray@rayjnorris.com",
        "password": "Dnomyar3584!@#$",
        "port": "465",
        "security": "ssl"
    },
    "mailgun": {
        "domain": "",
        "apiKey": "",
        "fromEmail": "",
        "fromName": ""
    },
    "styles": {
        "iCheck": {
            "enabled": true,
            "skin": "flat",
            "colorScheme": "black"
        },
        "Select2": {
            "enabled": true
        }
    },
    "logics": [

    ],
    "fields": [
        {
            "label": "Band Leader Name",
            "field_type": "name",
            "field_options": {
                "size": "small",
                "sender": "fullname",
                "images": {
                    "urls": "",
                    "slideshow": false
                },
                "validators": {
                    "required": {
                        "enabled": true
                    }
                },
                "placeholder": "",
                "addon": {
                    "leftIcon": "glyphicon glyphicon-user"
                }
            },
            "id": "f1",
            "cid": "c1"
        },
        {
            "label": "Your Street or Mailing Address",
            "field_type": "address",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                }
            },
            "labelHide": false,
            "gMapApiKey": "",
            "gaCompleteEnabled": true,
            "gaCountryRestrictions": "",
            "gaPostalCodeRestrictions": "",
            "gaLanguage": "",
            "showLabel": false,
            "showPlaceholder": true,
            "showDescription": false,
            "subfields": {
                "addressLine1": {
                    "order": 1,
                    "label": "Address",
                    "field_options": {
                        "enabled": true,
                        "gAddressTypes": "street_number route",
                        "gAddressName": "long_name",
                        "placeholder": "1234 Main St.",
                        "description": "Street address, P.O. box, company name, c\/o",
                        "validators": {
                            "required": {
                                "enabled": true,
                                "msg": "This field is required."
                            }
                        }
                    }
                },
                "addressLine2": {
                    "order": 2,
                    "label": "Address Line2",
                    "field_options": {
                        "enabled": false,
                        "placeholder": "Unit 1234",
                        "description": "Apartment, suite, unit, building, floor, etc.",
                        "validators": {
                            "required": {
                                "enabled": false,
                                "msg": ""
                            }
                        }
                    }
                },
                "city": {
                    "order": 3,
                    "label": "City",
                    "field_options": {
                        "enabled": true,
                        "gAddressTypes": "locality",
                        "gAddressName": "long_name",
                        "placeholder": "City",
                        "description": "City",
                        "validators": {
                            "required": {
                                "enabled": true,
                                "msg": "This field is required."
                            }
                        }
                    }
                },
                "state": {
                    "order": 4,
                    "label": "State",
                    "field_options": {
                        "enabled": true,
                        "gAddressTypes": "administrative_area_level_1",
                        "gAddressName": "long_name",
                        "placeholder": "State",
                        "description": "State \/ Province \/ Region",
                        "validators": {
                            "required": {
                                "enabled": true,
                                "msg": "This field is required."
                            }
                        }
                    }
                },
                "postalCode": {
                    "order": 5,
                    "label": "Zip Code",
                    "field_options": {
                        "enabled": true,
                        "gAddressTypes": "postal_code",
                        "gAddressName": "long_name",
                        "placeholder": "Zip Code",
                        "description": "Postal \/ Zip Code",
                        "validators": {
                            "required": {
                                "enabled": true,
                                "msg": "This field is required."
                            }
                        }
                    }
                },
                "country": {
                    "order": 6,
                    "label": "Country",
                    "field_options": {
                        "enabled": false,
                        "gAddressTypes": "country",
                        "gAddressName": "long_name",
                        "placeholder": "Country",
                        "description": "Country",
                        "validators": {
                            "required": {
                                "enabled": true,
                                "msg": "This field is required."
                            }
                        }
                    }
                }
            },
            "id": "f4",
            "cid": "c27"
        },
        {
            "label": "Email",
            "field_type": "email",
            "field_options": {
                "size": "small",
                "sender": true,
                "images": {
                    "urls": "",
                    "slideshow": false
                },
                "validators": {
                    "email": {
                        "enabled": true
                    },
                    "required": {
                        "enabled": true
                    }
                },
                "addon": {
                    "leftIcon": "glyphicon glyphicon-envelope",
                    "leftText": ""
                }
            },
            "id": "f2",
            "cid": "c2"
        },
        {
            "label": "Phone",
            "field_type": "text",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                },
                "size": "small",
                "addon": {
                    "leftIcon": "glyphicon glyphicon-earphone"
                }
            },
            "id": "f6",
            "cid": "c38"
        },
        {
            "label": "Comments",
            "field_type": "paragraph",
            "field_options": {
                "images": {
                    "urls": "",
                    "slideshow": false
                },
                "validators": {
                    "required": {
                        "enabled": true
                    }
                },
                "addon": {
                    "leftIcon": "glyphicon glyphicon-edit"
                }
            },
            "id": "f3",
            "cid": "c3"
        },
        {
            "label": "Band Type",
            "field_type": "radio",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                },
                "options": [
                    {
                        "label": "Bluegrass Band",
                        "checked": false
                    },
                    {
                        "label": "Old-time Band",
                        "checked": false
                    }
                ],
                "presetJson": "",
                "style": {
                    "columns": "col-1"
                }
            },
            "id": "f5",
            "cid": "c32"
        },
        {
            "label": "Band Name",
            "field_type": "text",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                },
                "size": "small",
                "addon": {
                    "leftIcon": "glyphicon glyphicon-music"
                }
            },
            "id": "f7",
            "cid": "c44"
        },
        {
            "label": "Member 1",
            "field_type": "text",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                },
                "size": "small",
                "addon": {
                    "leftIcon": "glyphicon glyphicon-user"
                }
            },
            "id": "f8",
            "cid": "c49"
        },
        {
            "label": "Member 2",
            "field_type": "text",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                },
                "size": "small",
                "addon": {
                    "leftIcon": "glyphicon glyphicon-user"
                }
            },
            "cid": "c54",
            "id": "f9"
        },
        {
            "label": "Member 3",
            "field_type": "text",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                },
                "size": "small",
                "addon": {
                    "leftIcon": "glyphicon glyphicon-user"
                }
            },
            "cid": "c60",
            "id": "f10"
        },
        {
            "label": "Member 4",
            "field_type": "text",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                },
                "size": "small",
                "addon": {
                    "leftIcon": "glyphicon glyphicon-user"
                }
            },
            "cid": "c66",
            "id": "f11"
        },
        {
            "label": "Member 5",
            "field_type": "text",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                },
                "size": "small",
                "addon": {
                    "leftIcon": "glyphicon glyphicon-user"
                }
            },
            "cid": "c72",
            "id": "f12"
        },
        {
            "label": "Member 6",
            "field_type": "text",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                },
                "size": "small",
                "addon": {
                    "leftIcon": "glyphicon glyphicon-user"
                }
            },
            "cid": "c78",
            "id": "f13"
        },
        {
            "label": "Submit Button",
            "field_type": "submit",
            "required": true,
            "field_options": {
                "page": {
                    "title": "Submit",
                    "labelPrev": "< Back",
                    "showPageNumnber": false,
                    "pageNumberText": "{page} \/ {total}"
                },
                "images": {
                    "urls": "",
                    "slideshow": false
                }
            },
            "labelHide": true,
            "submit": {
                "label": "",
                "icon": "",
                "checkRequiredFields": ""
            },
            "id": "f0",
            "cid": "c0"
        }
    ],
    "autoResponse": {
        "includeAttachments": true,
        "subject": "",
        "template": ""
    }
}
<?php /**JSON_END**/

        $json = ob_get_clean() ;

        return $decode ? json_decode( trim($json), true ) : $json;
    } // end of getConfig()

    private static function getValue( $fieldId, $default = NULL ){
        return isset( $_POST[$fieldId] ) ? $_POST[$fieldId] : $default ;
    }

    private static function overwriteConfig(){
    	//self::get_to();
    }

    private static function get_to(){
    	$value = self::getValue( 'c25' );
    	$to = array(
    		'Option 1' => 'a@a.com',
    		'Option 2' => 'b@b.com',
    		'Option 3' => 'c@c.com',
    	);

    	if( isset( $to[$value] ) ){
    		self::$config['email']['to'] = $to[ $value ];
    	};
    }

} // end of Config class