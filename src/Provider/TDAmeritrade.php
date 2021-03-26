<?php

namespace LupeCode\OAuth2\Client\Provider;

use League\OAuth2\Client\Provider\AbstractProvider;
use League\OAuth2\Client\Token\AccessToken;
use League\OAuth2\Client\Tool\BearerAuthorizationTrait;
use Psr\Http\Message\ResponseInterface;

class TDAmeritrade extends AbstractProvider
{
    protected const BASE_TDAMERITRADE_AUTHORIZATION_URL = 'https://auth.tdameritrade.com/';
    protected const BASE_TDAMERITRADE_API_URL           = 'https://api.tdameritrade.com/v1/';

    use BearerAuthorizationTrait;

    /**
     * Get authorization url to begin OAuth flow
     *
     * @return string
     */
    public function getBaseAuthorizationUrl()
    {
        return static::BASE_TDAMERITRADE_AUTHORIZATION_URL
               . 'auth?response_type=code&redirect_uri=' . $this->redirectUri
               . '&client_id=' . $this->clientId
               . '%40AMER.OAUTHAP';
    }

    /**
     * Get access token url to retrieve token
     *
     * @param  array $params
     *
     * @return string
     */
    public function getBaseAccessTokenUrl(array $params)
    {
        return static::BASE_TDAMERITRADE_API_URL . 'oauth2/token';
    }

    /**
     * Get provider url to fetch user details
     *
     * @param  AccessToken $token
     *
     * @return string
     */
    public function getResourceOwnerDetailsUrl(AccessToken $token)
    {
        return static::BASE_TDAMERITRADE_API_URL
               . 'userprincipals?fields=streamerSubscriptionKeys,streamerConnectionInfo,preferences,surrogateIds';
    }

    /**
     * Get the default scopes used by this provider.
     *
     * This should not be a complete list of all scopes, but the minimum
     * required for the provider user interface!
     *
     * @return array
     */
    protected function getDefaultScopes()
    {
        return [];
    }

    /**
     * Check a provider response for errors.
     *
     * @throws IdentityProviderException
     * @param  ResponseInterface $response
     * @param  array $data Parsed response data
     * @return void
     */
    protected function checkResponse(ResponseInterface $response, $data)
    {
        if ($response->getStatusCode() >= 400) {
            throw Exception\TDAmeritradeIdentityProviderException::clientException($response, $data);
        } elseif (isset($data['error'])) {
            throw Exception\TDAmeritradeIdentityProviderException::oauthException($response, $data);
        }
    }

    /**
     * Generate a user object from a successful user details request.
     *
     * @param array $response
     * @param AccessToken $token
     * @return \League\OAuth2\Client\Provider\ResourceOwnerInterface
     */
    protected function createResourceOwner(array $response, AccessToken $token)
    {
        return new TDAmeritradeResourceOwner($response);
    }

    public function getAccessToken($grant, array $options = [])
    {
        if (!array_key_exists('refresh_token', $options)) {
            $options['refresh_token'] = '';
        }
        if (!array_key_exists('access_type', $options)) {
            $options['access_type'] = 'offline';
        }

        return parent::getAccessToken($grant, $options);
    }
}
