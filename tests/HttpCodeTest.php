<?php

namespace ArrayPeru\HttpCode\Tests;

// PHPUnit
use PHPUnit\Framework\TestCase as BaseTestCase;

// HttpCode
use ArrayPeru\HttpCode;

class HttpCodeTest extends BaseTestCase
{
    public function testReturnAllInformationalCodes()
    {
        $this->assertTrue(100 === HttpCode::HTTP_CONTINUE);
        $this->assertTrue(101 === HttpCode::HTTP_SWITCHING_PROTOCOLS);
        $this->assertTrue(102 === HttpCode::HTTP_PROCESSING);
        $this->assertTrue(103 === HttpCode::HTTP_EARLY_HINTS);
    }

    public function testReturnAllSuccessfulCodes()
    {
        $this->assertTrue(200 === HttpCode::HTTP_OK);
        $this->assertTrue(201 === HttpCode::HTTP_CREATED);
        $this->assertTrue(202 === HttpCode::HTTP_ACCEPTED);
        $this->assertTrue(203 === HttpCode::HTTP_NON_AUTHORITATIVE_INFORMATION);
        $this->assertTrue(204 === HttpCode::HTTP_NO_CONTENT);
        $this->assertTrue(205 === HttpCode::HTTP_RESET_CONTENT);
        $this->assertTrue(206 === HttpCode::HTTP_PARTIAL_CONTENT);
        $this->assertTrue(207 === HttpCode::HTTP_MULTI_STATUS);
        $this->assertTrue(208 === HttpCode::HTTP_ALREADY_REPORTED);
        $this->assertTrue(226 === HttpCode::HTTP_IM_USED);
    }

    public function testReturnAllRedirectionCodes()
    {
        $this->assertTrue(300 === HttpCode::HTTP_MULTIPLE_CHOICES);
        $this->assertTrue(301 === HttpCode::HTTP_MOVED_PERMANENTLY);
        $this->assertTrue(302 === HttpCode::HTTP_FOUND);
        $this->assertTrue(303 === HttpCode::HTTP_SEE_OTHER);
        $this->assertTrue(304 === HttpCode::HTTP_NOT_MODIFIED);
        $this->assertTrue(305 === HttpCode::HTTP_USE_PROXY);
        $this->assertTrue(306 === HttpCode::HTTP_RESERVED);
        $this->assertTrue(307 === HttpCode::HTTP_TEMPORARY_REDIRECT);
        $this->assertTrue(308 === HttpCode::HTTP_PERMANENTLY_REDIRECT);
    }

    public function testReturnAllClientErrorCodes()
    {
        $this->assertTrue(400 === HttpCode::HTTP_BAD_REQUEST);
        $this->assertTrue(401 === HttpCode::HTTP_UNAUTHORIZED);
        $this->assertTrue(402 === HttpCode::HTTP_PAYMENT_REQUIRED);
        $this->assertTrue(403 === HttpCode::HTTP_FORBIDDEN);
        $this->assertTrue(404 === HttpCode::HTTP_NOT_FOUND);
        $this->assertTrue(405 === HttpCode::HTTP_METHOD_NOT_ALLOWED);
        $this->assertTrue(406 === HttpCode::HTTP_NOT_ACCEPTABLE);
        $this->assertTrue(407 === HttpCode::HTTP_PROXY_AUTHENTICATION_REQUIRED);
        $this->assertTrue(408 === HttpCode::HTTP_REQUEST_TIMEOUT);
        $this->assertTrue(409 === HttpCode::HTTP_CONFLICT);
        $this->assertTrue(410 === HttpCode::HTTP_GONE);
        $this->assertTrue(411 === HttpCode::HTTP_LENGTH_REQUIRED);
        $this->assertTrue(412 === HttpCode::HTTP_PRECONDITION_FAILED);
        $this->assertTrue(413 === HttpCode::HTTP_REQUEST_ENTITY_TOO_LARGE);
        $this->assertTrue(414 === HttpCode::HTTP_REQUEST_URI_TOO_LONG);
        $this->assertTrue(415 === HttpCode::HTTP_UNSUPPORTED_MEDIA_TYPE);
        $this->assertTrue(416 === HttpCode::HTTP_REQUESTED_RANGE_NOT_SATISFIABLE);
        $this->assertTrue(417 === HttpCode::HTTP_EXPECTATION_FAILED);
        $this->assertTrue(418 === HttpCode::HTTP_I_AM_A_TEAPOT);
        $this->assertTrue(421 === HttpCode::HTTP_MISDIRECTED_REQUEST);
        $this->assertTrue(422 === HttpCode::HTTP_UNPROCESSABLE_ENTITY);
        $this->assertTrue(423 === HttpCode::HTTP_LOCKED);
        $this->assertTrue(424 === HttpCode::HTTP_FAILED_DEPENDENCY);
        $this->assertTrue(425 === HttpCode::HTTP_RESERVED_FOR_WEBDAV_ADVANCED_COLLECTIONS_EXPIRED_PROPOSAL);
        $this->assertTrue(426 === HttpCode::HTTP_UPGRADE_REQUIRED);
        $this->assertTrue(428 === HttpCode::HTTP_PRECONDITION_REQUIRED);
        $this->assertTrue(429 === HttpCode::HTTP_TOO_MANY_REQUESTS);
        $this->assertTrue(431 === HttpCode::HTTP_REQUEST_HEADER_FIELDS_TOO_LARGE);
        $this->assertTrue(451 === HttpCode::HTTP_UNAVAILABLE_FOR_LEGAL_REASONS);
    }

    public function testReturnAllServerErrorCodes()
    {
        $this->assertTrue(500 === HttpCode::HTTP_INTERNAL_SERVER_ERROR);
        $this->assertTrue(501 === HttpCode::HTTP_NOT_IMPLEMENTED);
        $this->assertTrue(502 === HttpCode::HTTP_BAD_GATEWAY);
        $this->assertTrue(503 === HttpCode::HTTP_SERVICE_UNAVAILABLE);
        $this->assertTrue(504 === HttpCode::HTTP_GATEWAY_TIMEOUT);
        $this->assertTrue(505 === HttpCode::HTTP_VERSION_NOT_SUPPORTED);
        $this->assertTrue(506 === HttpCode::HTTP_VARIANT_ALSO_NEGOTIATES_EXPERIMENTAL);
        $this->assertTrue(507 === HttpCode::HTTP_INSUFFICIENT_STORAGE);
        $this->assertTrue(508 === HttpCode::HTTP_LOOP_DETECTED);
        $this->assertTrue(510 === HttpCode::HTTP_NOT_EXTENDED);
        $this->assertTrue(511 === HttpCode::HTTP_NETWORK_AUTHENTICATION_REQUIRED);
    }

    public function testReturnAllTextBasicCodes()
    {
        $this->assertTrue("Continue" === HttpCode::text(HttpCode::HTTP_CONTINUE));
        $this->assertTrue("OK" === HttpCode::text(HttpCode::HTTP_OK));
        $this->assertTrue("Multiple Choices" === HttpCode::text(HttpCode::HTTP_MULTIPLE_CHOICES));
        $this->assertTrue("Bad Request" === HttpCode::text(HttpCode::HTTP_BAD_REQUEST));
        $this->assertTrue("Internal Server Error" === HttpCode::text(HttpCode::HTTP_INTERNAL_SERVER_ERROR));
    }

    public function testReturnNullOrEmptyTextCode()
    {
        $this->assertEmpty(HttpCode::text(600));
    }
}
