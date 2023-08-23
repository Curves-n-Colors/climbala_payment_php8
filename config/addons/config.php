<?php

return [

	'public_key'  => 'MDwjgtVspt58haKebsV7mNvAQIMRwnN3',

	'private_key' => 'ySgpzBm4kIwExaCfIAgt7gHwwiqEWBk0ipCgEpXIgZosQV6ik0',

	'ref_code_prefix' => 'CLB',

	'currency_code' => [
		'NPR', 'USD'
	],

	'recurring_type' => [
		1  => 'ONETIME',
		2  => 'WEEKLY',
		3  => 'MONTHLY',
		4  => 'YEARLY',
	],

	'type_recurring' => [
		'ONETIME'  => 1,
		'WEEKLY'  => 2,
		'MONTHLY'  => 3,
		'YEARLY'  => 4,
	],

	'payment_status' => [
		0  => 'PENDING',
		1  => 'CANCELLED',
		2  => 'CONFIRMED',
		3  => 'INVALID',
		4  => 'REFUNDED',
		10 => 'COMPLETED'
	],

	'status_payment' => [
		'PENDING'    => 0,
		'CANCELLED'  => 1,
		'CONFIRMED'  => 2,
		'INVALID'    => 3,
		'REFUNDED'   => 4,
		'COMPLETED'  => 10
	],

	'payment_status_code' => [
		'P'    => 0, //PENDING
		'C'    => 1, //CANCELED
		'F'    => 2, //FAILED
		'PCPS' => 3, //INCOMPLETE
		'A'    => 10 //APPROVED
	],

	'payment_status_info' => [
		0  => 'PENDING',
		1  => 'CANCELED',
		2  => 'FAILED',
		3  => 'INCOMPLETE',
		10 => 'APPROVED',
	],

	'payment_options' => [

		'hbl' => [
			    'TEST' => [
                'request_3ds_flag' => 'N',
                'merchant_id' => '9103332177',
                'payment_endpoint' => 'https://core.demo-paco.2c2p.com/',
                'encryption_id' => '7664a2ed0dee4879bdfca0e8ce1ac313',
                'access_token' => [
                    'USD' => 'd64fcd5489eb42bebe46c5fcd0cf19be',
                    'NPR' => 'd64fcd5489eb42bebe46c5fcd0cf19be',
                ],
                'merchant_signing_private_key' => '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',
                'merchant_decryption_private_key' => 'MIIJQgIBADANBgkqhkiG9w0BAQEFAASCCSwwggkoAgEAAoICAQCFTZLkKZKHnHCFAD7QohbYrTrUrEyS23fo7RxoWmrZwIx2cWZNBaAAwP5O53bdUmz7JuEpqYTsyE1SzPq6cZtd9M+xKdLlBedz9sPkoCY9zCAV5wgiHX4+1xvfSGuG1dFDVcbPPf0rj13H2IoJ5wpSdWL9dEIyBXgJIaGAOZeTK93Z4F5J86JuA2wqGBmgV0csRQbSx1ovHIpfeKMTPH7mAiQ3P1TlhPYwJTZrXMYdhVFcR1jZJbucR9Ditk8BGk4DKdBUXfzFk5/A2nZP3ckjOfkuMd4+2SDZKed/Nlg+M+BtHkwgmsBYXmIuejDXtg4kVIxvLGx8iUBnrZAK8+rCJbfWutJ+k4kdXfAbtw4nOysZfBVh0wreLiS6r6xUmGXuDsrn/YUAdvHKAuD1Brg3EQNaV1pr2p/F62ORafbjSxIJYvUDzi4250OzFJq/bsDdm7MgzBljrjZBEeeM5HNzsJau1GRVJeY7AmilUfRvC1Iiul1EUXp6HheA2SLs3ID8XzB+nx53AlsrMqnKsJy1iRbGMswgLHZRNFN9IzO25DkeGsGDzxdwkQTd2tvgMShnzMPazQyiCkl+yLxM+LsWz3kyOFpPisf6g+1t78Dr5p+EJljqYj6/mXCEr4Ns1LREaQP6NQsl542eKNnnfiFjnB1IR/jQBFvx2WFWkQdGeQIDAQABAoICAFBmgXpsOJzillsh0sEzgmQd16X+ZhENnj03BjNKlbfQkue9bd52zhKmVLxyjxbeaCzzPktKm4nVJg4S5AcgDn2U8tAAUdsgvIENDQoQLgCH5bJQLm+lKkfspjr+CxzASf869TZ6RQDI799hk6B1YZxqgNIuFN7mvYeEaUxVcD6r7ptC4Jvp/sYr+klJT+uNuLfSylLHOnW/2RXMRU+M5V0FXaKU6DenAnX3e+M1iai0iGYIAma2g3m3Nx4Gp5AatYLi7Wx1Y8gnSeuf2ExDkNVWWhyqp0lw3Ice5ymrNX4O/AXUiEYCEJE8HCu8N0lj3RO8ixdiy+wxPE9MN9zjUWv5TKufYgVKRBYa4hf94ovw1IKGLRps//zdYLrDRdaVP7BJ/BOkcON7Oo/fw72x2QfWssUP2iGHYNBu4sZzA0UdgINBuzy+TO8ru8EWmey7+1KWiXBrV6JwNqkIVyc4+oZY6bkuE7NaZV/+wuUxJM1wb4AqVqa62N3EluvhE2gXH1gNxYg2ios5WqPnLGYOs2bsBgrmvCQKcyI3p7PuuAU+H3j2bprenzquCrRwTMdiz5iDgrw1d51CYSZG0tEwT8/pL19Gy2wDv5rNqj8APxhAAEackjYKjVGIRJxv/tVsi5kx+VLsOZ+KKR/+sar6HvNL6w1fSZNyjGslZbhgRbwBAoIBAQC4xFFcxIivIWcfYDPIs2Via4L3wdY3NqgX4CuhQXV3N4SVTbbRwFdQlvGEKyCGXF/G+eIOcNZk2xEvJ4Vy6p3QtxjTgGR1ZpD2ULEh0UJhE/djNTvH+YCVbrr/rJK8QdQ7Wg3Cwf41T59AQmp/2xfDBZW5Njrfj+PAibO748qXLfC/+ZfwJQtYa7CBLZJL0Sm4jNGes26s98fYfw3ZZ+53GSd2a/fSLjVyyS5ad1pcbUt9/aIheCjRQtOjkgQ4YtxkIl6QWbCG0UAkvOJhjt8jwrEFFd8q8WPBt0skjedidWHDsr6lkkqO9I666+uH+imNjGKhBTTIAIneOqXwJYLJAoIBAQC4sf/gA0HR5kjgkzQKyFOR+JxNaKDw/cB+An+XMhMGTWlBqO+tlAKnOPDiD6K57fApEWypfnsUCXX+YHzF0OUNTsJUgQPnGEh4Gy6YM4ZXWc2ZJU3Mr6BQG1iw4CeYQCJqM1dk949f7R4xUVzwMEAxQ0XNw2WOT8Vf9WvCvJ0MINhzcxExunVTyXetLtT/22pzqScdjuivryg/AqCSM+XrQUi5hx8ztsIauhbYhBPzxcMexqM+sxOOUWBUaPnShiGy5TOSLB/gMMQhS00ojc34vjaTjW2TMZz8NfTCYET4lf6xAqeno3kjly5cqmlPkTKhGWlksRAYc+BGerDMAE4xAoIBAHjFqkEvHgELnnJ92Zt41+5rRCJai4FvspRYrWwsc3HH0lwdfkDArtI4uAmifxIUU26ma8LwstMd9q+R78Lb5OhGpm2pYQD0WBEJUZ8/P1phSLWKWFcwmYIT7RuuXAO+K9HX3WLOlzGVqAzC3QZR2chaYDG+ZuE3FrIF0HwiO4xyNQnnRg9sx2u2iJsHhLcWM2U0dth7hP5+wBydgBn5u4AR6x+XF1hFaB5trmTn2yLLNitWnKGv/045lkk26pdI17KEXLeSSLb3FCxvYrJOR0ECw98FGujg/EnlW7K7JuHOxGa88a0cYKvs41b/Wud496xUdSu3UXbiEzw1rb25ZzECggEBAKJQ7Mr2kdXiSJH1THtdavSSROtS1H52w8D6eR9rhoS3a5Wk3l7yARLtW+WQUDaPAc1V3uVmnswRNH2GVqGS4Ho9iVOyvrdOBAJqAR0JyzrhVWsN+b21a3J7Vgq8NI/9bUFgNaIqXvqy7SHym3cLMJ8avDIFUy8qtA+NJFNUZ8DM7O0pZycI8yvbly3ARrlFH9zd/95eReiASyJ1MKDMs3d5PGywb5+HMjdC6+kEynQmjUBy2ey0fK9KnRoR19xIvTz3acdAuBLTSMrp3rmRRj8hC93JIU+G/qw4zw40hOjjCZ6O8sDFTiUVLE2MBllDBffG2XUAl2CmFahbEx1190ECggEAOtMfWO/eIm0vaheNjzcJIHyURZjx2oeaqJ9+WhTxyoHNPf3oyXgnT7eBXQEilJmdEd6Yl6byRkkrWr12liqDRV3DEM+gugREI1VpjCoDAmNpoR7JgjgYL6hp4Nk/kLovY5/edCcpDLAu6eE51HU+hVZSl8bsejsx/mWUYWpg1YhFj49+gs4m0AsA6fOsQU3AhrVoQGXjEUeI+xhHUlfRRE8OGOt1xHsiZgCYvcfcNosikD4jWJpM/BuQ5dqqxSpf2Sg7FtLTLcVv3VmCaUf6TppP6IF1GHfbkLv7cvQ47BTK5ryqg56UhwizWAV7dayp8ybsII1jd7GqbfTgRzXkNA==',
                'paco_signing_public_key' => 'MIICIjANBgkqhkiG9w0BAQEFAAOCAg8AMIICCgKCAgEAkEOCDQxCbyv/n1jadyDDL9KLRddF7W2eVNf7GwVeqlq3CVor0QHiU+yweO3b622NZAPDBy/GFeJJH5lwdJUbYojFWtHUqYN7/HoTHF50KhAbLMhnllsULuyVgG1l3m9xSjRJtQSaIZP5jF4LSM+m69Xd7U2qoTczMOaNZ36yWZzxN/OUQMjb2cWeZCLhVPf6zJwA35kC57NK2n1DDvvyFvLnh9gBd8EOkJuT9us1r01Ya3XpFHhXy1fTg9bmWXDMwMm5stnhmGOF2d6Uv4rYGqk67nRzX0ZEGrWW6X0tzeQESkQShx0algKIXeM/2RBfit1QHDHhI70CYTqt1eG05Cpr5u7FdvD4pk8fqfW8xJsmoZisQNQnov0oriUqrB1wZvWL8+calfoX0nxWMVlP37LspA6O2+dlnjFxpDQSjnfWVFyS6fKvr8jXWI6KG6L11J+yAXY4KjqGK+wEnH2yf8tK8NLkIAWNstlUQrycEkk4mP6ElKwkOMpRND0ArG1cG0uMx+VXd1vrWG6UePa+GHmgHbgLSkjI3hpz3wbpE5cbp73dbIgryeC0AeLY7kKDt7pMQpkg3gNxcvTGXjZYc1TQ5siuD1RBJUR5Lv/P8jjyQnB4D67AEuL1pw5acKQ3tfOEF+iuzzzV5zeSj5T5rYR1GpuPOqTz97AWSxawDUsCAwEAAQ==',
                'paco_encryption_public_key' => 'MIICIjANBgkqhkiG9w0BAQEFAAOCAg8AMIICCgKCAgEAviq4wrTmVMkRHouiHLUonJ1d6ss6nNreJ0JWpLwmTwAM7l35g8AFIvE8PqwWevtjuil9JZ1T1zwQTP8aM3s5/RzX5yFIhec/O14jib7Nmi4jACeJqDlHsnYzeCPw8WOhgmxWKHcORNLpn68jgnhLrKwh3Mooz/hXtIwGuNe/pYU7i/QaiuOjtmIcQ3yxJWjiHsllaogobZjbwMzwhp1fJ6ELmZp0FJvDrE8dn4UU9yzPFNzQ4gJzJAS/JKLXjfDw5mDQdw80vbzYuxksU0bc/3+DwY6hqaVJsP2AST7dCTR1wYzevzPxp0HMDmz1Ia/hSrmTPRhSa0qvxHMriVHUJvJeLTNI3cWM0RI9ukR7/v6vcf8ZwOZ+u7w4YfLpPCQFN7zGUN9Hho0pWBVYOstqsF5h/ZgBOlEHgSYY3CJdscV1+vKUvmFPiwkOdVxhc571RX56o+V71ZIGjXeYeqd3KNnND1JNsOn4hRPbk8Cl0e8CfZnEePfqtbFQGrzRU3GvSXscMb51TlvZu9i0toJdIJ4DiOCkUlB2sDI4x7N9ROOEbAD8uv68/jZqTM2paUNRN7Xvaa2LUCis3acadiyLt0tpuOT0sY2OejhLJshwNfTfc67gdtCJ3diddZWkXYpBgkMhuVj3TSx85sUklbGGJkzkwNsC0JhMSo7ZqbYxczECAwEAAQ==',
            ],
			'PRODUCTION' => [
				'request_3ds_flag' => 'Y',
				'merchant_id'       => '9104136825',
				'access_token' => [
					'USD' => '4377318caaa44e22b71b0f25c58ce16b',
					'NPR' => '25321b3bce854cfeb5f3773e20537b61'
				],
				'payment_endpoint' => 'https://core.paco.2c2p.com/',
				'encryption_id' => '19f84b5655f04e25a99b09f1ee2fac78',
				'merchant_signing_private_key'=> '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',
				'merchant_decryption_private_key'=> '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',
				'paco_signing_public_key'=> 'MIICIjANBgkqhkiG9w0BAQEFAAOCAg8AMIICCgKCAgEAr0XW6QacR8GilY4nZrJZW40wnFeYu7h9aXUSqxCP6djurCWZmLqnrsYWP7/HR8WOulYPHTVpfqJesTOdVqPgY6p10H811oRbJG9jvsG8j8kn/Bk8b2wZ9qelNqdNJMDbR5WUyaytaDWW6QdI4+clqjFfwCOw76noDSe+R4pDSzgMiyCk5R4m2ECT1fv/4Axz2bvLN+DRTg5DPPIMLWpA87lgjxeaDlGyJqZCbkJozW7JX0AJVc0X7YR9kzbiTi3LVOInSKY+VHT8yCARIdvXtKc6+IWSbVQqgpNIBB8GN0OvU8xedjPNCMGZnnMtgd7XLTf/okyadbdNLAqQLTbDs/5HnIVx8FyfgiOS/zsim5ivi3ljVAW3T3ePGjkY0q1DMzr5iJ4m/WTL2d1TArlfHyQhkSpFpQPOO+pJyVQqttHJo99vMirQogdSx4lIu//aod0yJyJLpjCeiqb2Fz3Qk0AZ4S78QKeeGsxTRchTP6Wsb6okaZd+cFi6z8qbP0z/Y3xRZO7vOLB/whkqS+pMVKBQ42YzgQPRzbXXmgCkf1nCqgrD9bnIB5ovdRGfDXW86GKY8XwGVjb4BoMvql+HsbonKHAO+eGfQulpB5YfQGQU3ZXdMdfCLAk8FuqemH4k7S7diLzVvRCuisHsEx6qJ4ewxzNCvW7OGVinTR9NSQUCAwEAAQ==',
				'paco_encryption_public_key'=> 'MIICIjANBgkqhkiG9w0BAQEFAAOCAg8AMIICCgKCAgEA6ZLups2K0iYEMxQqgASX8gY6tWhNVCp08YuDgjCsOVrGVgUHD0dh0TWFNJ7Lq2Jp0SOsGgi54+hrjwPOL2CCZxw8pKUlL57UksoD9oWUrK/KkSvEAwPU4cZqzxIXyhBcZb8O96iN4WQJILkRTg+DXLkML6qisO496fPGIs+vCoc87toucy5O9fRfaYSjcqjreyi8JDkvVJM/BeNtOEM2a0b/lcWa67RH+tN97H25k+Qez7QthLru6oBfWBgD6iIwhV+ICqLWHmp6fQ+DHQk/o+OO3yFiY9OAvMiy8MOTinvkBlFwYgYNznG3/w0Xh8U5vtudUXPDNUO6ddf4y99+6LlWDiKgJn/Th93YUg+gFH4LUJHyPrSY2JuC+Q8kksp2xyiZDTHGzi96kturwrqCui6TytCHcU4UB0VRMR+M7VRl3S2YPhcxv5U8Fh2PITqydZE5vv1Va06qhegjOlSZnEUl2xKPm5k/u+UHvUP/oq04fQLTlYqyA3JYDCe4z5Ea2SOgjeVl+qTatWYzmkUXyCONLZ4UaRrgbYCp0nCPHoTFgRQdChu8ezDbnYY9IW7cT/s2fEi5N7X1XrQttiEP4rbn0y0qVYYjN86+elfhtYGHidZTUSUS5RSTHqOkj59p5LIGwFF9iTXzCjfUqq8clnfOk76qSLY1+Kj+SMMe6Z8CAwEAAQ==',
			],
			'code'  			=> 'HBL',
			'name'  			=> 'Himalayan Bank Ltd - Payment Gateway',
			'title' 			=> 'Credit Card - HBL',
			'non_secure'        => 'N',
			'merchant_id'       => '9103338075',//PROD
			//'merchant_id'       => '9103332177',//TEST
			'merchant_name'     => 'CLIMBALAYA_TREKS_AND_EXPEDITION_ECOM_NPL',
			'access_token' => [
				'USD' => '36e5997d218b4483b3c06368399618a7',
				'NPR' => 'be27e167322e47dc9aa4376cb7546a35'
			],
			// 'access_token' => [
			//  	'USD' => 'd64fcd5489eb42bebe46c5fcd0cf19be',
			//  	'NPR' => 'd64fcd5489eb42bebe46c5fcd0cf19be'
			// ],
			'secret_key'        => 'U9LABZ33POUA3WMG6BWNZ8DVBGTNSKXR',
			'request_url'       => 'https://hblpgw.2c2p.com/HBLPGW/Payment/Payment/Payment',
			'test_request_url'  => 'https://hbl.pgw/payment',
			'currency' => [
				'NPR' 	=> 'NPR',
				'USD' 	=> 'USD'
			],
			'currency_code'     => [
				'USD' 	=> 840,
				'NPR' 	=> 524
			],
			'url_encryption_key' 	=> 'Lrot3yy3CQkJnBipexF4BiKD5ybWsfKjWzAfG6clilSYw0WWuh78ITJNUplA9Dzo',
			'frontend_response_uri' => '/hbl-payment/{url_encryption_key}',
			'backend_response_uri'  => '/hbl-payment-response',

			'status' => [
				'success_status'    => 'RS',
				'payment_status'    => [
					'AP' => 'Approved(Paid)',
					'SE' => 'Settled',
					'VO' => 'Voided (Canceled)',
					'DE' => 'Declined by the issuer Host',
					'FA' => 'Failed',
					'PE' => 'Pending',
					'EX' => 'Expired',
					'RE' => 'Refunded',
					'RS' => 'Ready to Settle',
					'AU' => 'Authenticated',
					'IN' => 'Initiated',
					'FP' => 'Fraud Passed',
					'PA' => 'Paid (Cash)',
					'MA' => 'Matched (Cash)',
				],
				'response_code'     => [
					'00' => 'Approved (transaction is successfully paid)',
					'01' => 'Refer to Card Issuer',
					'02' => 'Refer to Issuer\'s Special Conditions',
					'03' => 'Invalid Merchant ID',
					'04' => 'Pick Up Card',
					'05' => 'Do Not Honour',
					'06' => 'Error',
					'07' => 'Pick Up Card, Special Conditions',
					'08' => 'Honour with ID',
					'09' => 'Request in Progress',
					'10' => 'Partial Amount Approved',
					'11' => 'Approved VIP',
					'12' => 'Invalid Transaction',
					'13' => 'Invalid Amount',
					'14' => 'Invalid Card Number',
					'15' => 'No Sun Issuer',
					'16' => 'Approved, Update Track 3',
					'17' => 'Customer Cancellation',
					'18' => 'Customer Dispute',
					'19' => 'Re-enter Transaction',
					'20' => 'Invalid Response',
					'21' => 'No Action Taken',
					'22' => 'Suspected Malfunction',
					'23' => 'Unacceptable Transaction Fee',
					'24' => 'File Update not Supported by Receiver',
					'25' => 'Unable to Locate Record on File',
					'26' => 'Duplicate File Update Record',
					'27' => 'File Update Field Edit Error',
					'28' => 'File Update File Locked Out',
					'29' => 'File Update not Successful',
					'30' => 'Format Error',
					'31' => 'Bank not Supported by Switch',
					'32' => 'Completed Partially',
					'33' => 'Expired Card - Pick Up',
					'34' => 'Suspected Fraud - Pick Up',
					'35' => 'Contact Acquirer - Pick Up',
					'36' => 'Restricted Card - Pick Up',
					'37' => 'Call Acquirer Security - Pick Up',
					'38' => 'Allowable PIN Tries Exceeded',
					'39' => 'No Credit Account',
					'40' => 'Requested Function not Supported',
					'41' => 'Lost Card - Pick Up',
					'42' => 'No Universal Amount',
					'43' => 'Stolen Card - Pick Up',
					'44' => 'No Investment Account',
					'45' => 'Settlement Success',
					'46' => 'Settlement Fail',
					'47' => 'Reserved',
					'48' => 'Cancel Fail',
					'49' => 'No Transaction Reference Number',
					'50' => 'Host Down',
					'51' => 'Insufficient Funds',
					'52' => 'No Cheque Account',
					'53' => 'No Savings Account',
					'54' => 'Expired Card',
					'55' => 'Incorrect PIN',
					'56' => 'No Card Record',
					'57' => 'Trans. not Permitted to Cardholder',
					'58' => 'Transaction not Permitted to Terminal',
					'59' => 'Suspected Fraud',
					'60' => 'Card Acceptor Contact Acquirer',
					'61' => 'Exceeds Withdrawal Amount Limits',
					'62' => 'Restricted Card',
					'63' => 'Security Violation',
					'64' => 'Original Amount Incorrect',
					'65' => 'Exceeds Withdrawal Frequency Limit',
					'66' => 'Card Acceptor Call Acquirer Security',
					'67' => 'Hard Capture - Pick Up Card at ATM',
					'68' => 'Response Received Too Late',
					'69' => 'Reserved',
					'70' => 'Settle amount cannot more than authorized amount',
					'71' => 'Inquiry Record Not Exist',
					'72' => 'Reserved',
					'73' => 'Reserved',
					'74' => 'Rejected by Fraud',
					'75' => 'Allowable PIN Tries Exceeded',
					'76' => 'Invalid Credit Card Format',
					'77' => 'Invalid Expiry Date Format',
					'78' => 'Invalid Three Digits Format',
					'79' => 'Only Full Authentication Allowed',
					'80' => 'User Cancellation by closing Internet Browser',
					'81' => 'Corporate Card Blocked',
					'82' => 'Verify Request Data Failed',
					'83' => 'Merchant Currency Mismatched',
					'84' => 'Reserved',
					'85' => 'Reserved',
					'86' => 'Reserved',
					'87' => 'No Envelope Inserted',
					'88' => 'Unable to Dispense',
					'89' => 'Administration Error',
					'90' => 'Cut-off in Progress',
					'91' => 'Issuer or Switch is Inoperative',
					'92' => 'Financial Institution not Found',
					'93' => 'Trans Cannot be Completed',
					'94' => 'Duplicate Transmission',
					'95' => 'Reconcile Error',
					'96' => 'System Malfunction',
					'97' => 'Reconciliation Totals Reset',
					'98' => 'MAC Error',
					'99' => 'System Unavailable',
				],
				'fraud_code'        => [
					'00' => 'High possibility of no fraud',
					'86' => 'Merchant in whitelist(entry date : [[DDMMYY]])',
					'87' => 'PAN in whitelist(entry date : [[DDMMYY]])',
					'88' => 'Not Local IP Country',
					'89' => 'Bank Name not matched',
					'90' => 'Bank Country not matched',
					'91' => 'Exceeded over [[limit]] Txn limit of one IP using multiple PAN within 24 hours',
					'92' => 'Exceeded over [[limit]] PAN limit of inter non-3DS cards within 24 hours',
					'93' => 'Exceeded over [[limit]] PAN limit of inter 3DS cards within 24 hours',
					'94' => 'Exceeded over [[limit]] PAN limit of local non-3DS cards within 24 hours',
					'95' => 'Exceeded over [[limit]] PAN limit of local 3DS cards within 24 hours',
					'96' => 'BIN in black list(entry date : [[DDMMYY]])',
					'97' => 'IP in black list(entry date : [[DDMMYY]])',
					'98' => 'PAN in blacklist(entry date : [[DDMMYY]])',
					'99' => 'General Error : [[details]]'
				],
			],
		],

	],

	'errors' => [
		'link-inactive' 		=> 'Your payment link has been deactivated.',
		'link-invalid'      	=> 'Your payment link is invalid.',
		'link-unauthorised' 	=> 'Your payment link is unauthorised.',
		'link-expired' 			=> 'Your payment link has expired.',
		'trans-verfiy-failed' 	=> 'Your payment transaction verification failed.',
		'trans-cancel-pg' 		=> 'Your payment transaction has been cancelled from the payment gateway server',
		'trans-ref-invalid' 	=> 'Your payment reference is invalid',
		'trans-complete' 	    => 'Your payment was successful',
	]
];

/*

errors.100
=> this condition is triggered when a payment is successful and system deactivated the payment link
=> in pay.index route it is redirect as link deactived error
=> but in result.success it is considered as payment successful 


https://unpkg.com/khalti-checkout-web@latest/dist/khalti-checkout.iffe.js
*/