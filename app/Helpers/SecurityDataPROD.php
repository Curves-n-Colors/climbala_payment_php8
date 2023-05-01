<?php

namespace App\Helpers;

class SecurityDataPROD
{
    /**
     * JWE Key Id.
     *
     * @var string
     */
    public static string $EncryptionKeyId = "19f84b5655f04e25a99b09f1ee2fac78";

    /**
     * Access Token.
     *
     * @var string
     */
    public static string $AccessToken = "36e5997d218b4483b3c06368399618a7";

    /**
     * Token Type - Used in JWS and JWE header.
     *
     * @var string
     */
    public static string $TokenType = "JWT";

    /**
     * JWS (JSON Web Signature) Signature Algorithm - This parameter identifies the cryptographic algorithm used to
     * secure the JWS.
     *
     * @var string
     */
    public static string $JWSAlgorithm = "PS256";

    /**
     * JWE (JSON Web Encryption) Key Encryption Algorithm - This parameter identifies the cryptographic algorithm
     * used to secure the JWE.
     *
     * @var string
     */
    public static string $JWEAlgorithm = "RSA-OAEP";

    /**
     * JWE (JSON Web Encryption) Content Encryption Algorithm - This parameter identifies the content encryption
     * algorithm used on the plaintext to produce the encrypted ciphertext.
     *
     * @var string
     */
    public static string $JWEEncrptionAlgorithm = "A128CBC-HS256";

    /**
     * Merchant Signing Private Key is used to cryptographically sign and create the request JWS.
     *
     * @var string
     */
    public static string $MerchantSigningPrivateKey = "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";
    /**
     * PACO Encryption Public Key is used to cryptographically encrypt and create the request JWE.
     *
     * @var string
     */
    public static string $PacoEncryptionPublicKey = "MIICIjANBgkqhkiG9w0BAQEFAAOCAg8AMIICCgKCAgEA6ZLups2K0iYEMxQqgASX8gY6tWhNVCp08YuDgjCsOVrGVgUHD0dh0TWFNJ7Lq2Jp0SOsGgi54+hrjwPOL2CCZxw8pKUlL57UksoD9oWUrK/KkSvEAwPU4cZqzxIXyhBcZb8O96iN4WQJILkRTg+DXLkML6qisO496fPGIs+vCoc87toucy5O9fRfaYSjcqjreyi8JDkvVJM/BeNtOEM2a0b/lcWa67RH+tN97H25k+Qez7QthLru6oBfWBgD6iIwhV+ICqLWHmp6fQ+DHQk/o+OO3yFiY9OAvMiy8MOTinvkBlFwYgYNznG3/w0Xh8U5vtudUXPDNUO6ddf4y99+6LlWDiKgJn/Th93YUg+gFH4LUJHyPrSY2JuC+Q8kksp2xyiZDTHGzi96kturwrqCui6TytCHcU4UB0VRMR+M7VRl3S2YPhcxv5U8Fh2PITqydZE5vv1Va06qhegjOlSZnEUl2xKPm5k/u+UHvUP/oq04fQLTlYqyA3JYDCe4z5Ea2SOgjeVl+qTatWYzmkUXyCONLZ4UaRrgbYCp0nCPHoTFgRQdChu8ezDbnYY9IW7cT/s2fEi5N7X1XrQttiEP4rbn0y0qVYYjN86+elfhtYGHidZTUSUS5RSTHqOkj59p5LIGwFF9iTXzCjfUqq8clnfOk76qSLY1+Kj+SMMe6Z8CAwEAAQ==";
    /**
     * PACO Signing Public Key is used to cryptographically verify the response JWS signature.
     *
     * @var string
     */
    public static string $PacoSigningPublicKey = "MIICIjANBgkqhkiG9w0BAQEFAAOCAg8AMIICCgKCAgEAr0XW6QacR8GilY4nZrJZW40wnFeYu7h9aXUSqxCP6djurCWZmLqnrsYWP7/HR8WOulYPHTVpfqJesTOdVqPgY6p10H811oRbJG9jvsG8j8kn/Bk8b2wZ9qelNqdNJMDbR5WUyaytaDWW6QdI4+clqjFfwCOw76noDSe+R4pDSzgMiyCk5R4m2ECT1fv/4Axz2bvLN+DRTg5DPPIMLWpA87lgjxeaDlGyJqZCbkJozW7JX0AJVc0X7YR9kzbiTi3LVOInSKY+VHT8yCARIdvXtKc6+IWSbVQqgpNIBB8GN0OvU8xedjPNCMGZnnMtgd7XLTf/okyadbdNLAqQLTbDs/5HnIVx8FyfgiOS/zsim5ivi3ljVAW3T3ePGjkY0q1DMzr5iJ4m/WTL2d1TArlfHyQhkSpFpQPOO+pJyVQqttHJo99vMirQogdSx4lIu//aod0yJyJLpjCeiqb2Fz3Qk0AZ4S78QKeeGsxTRchTP6Wsb6okaZd+cFi6z8qbP0z/Y3xRZO7vOLB/whkqS+pMVKBQ42YzgQPRzbXXmgCkf1nCqgrD9bnIB5ovdRGfDXW86GKY8XwGVjb4BoMvql+HsbonKHAO+eGfQulpB5YfQGQU3ZXdMdfCLAk8FuqemH4k7S7diLzVvRCuisHsEx6qJ4ewxzNCvW7OGVinTR9NSQUCAwEAAQ==";
    /**
     * Merchant Decryption Private Key used to cryptographically decrypt the response JWE.
     * @var string
     */
    public static string $MerchantDecryptionPrivateKey = "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";
}