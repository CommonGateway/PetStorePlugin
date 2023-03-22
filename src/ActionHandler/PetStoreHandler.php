<?php
/**
 * An example handler for the per store.
 *
 * @author  Conduction.nl <info@conduction.nl>
 * @license EUPL-1.2 https://joinup.ec.europa.eu/collection/eupl/eupl-text-eupl-12
 */

namespace CommonGateway\PetStoreBundle\ActionHandler;

use CommonGateway\PetStoreBundle\Service\PetStoreService;


class PetStoreHandler
{

    /**
     * The pet store service used by the handler
     *
     * @var PetStoreService
     */
    private PetStoreService $petStoreService;


    /**
     * The constructor
     *
     * @param PetStoreService $petStoreService The pet store service
     */
    public function __construct(PetStoreService $petStoreService)
    {
        $this->petStoreService = $petStoreService;

    }//end __construct()


    /**
     * Returns the requered configuration as a https://json-schema.org array.
     *
     * @return array The configuration that this  action should comply to
     */
    public function getConfiguration(): array
    {
        return [
            '$id'         => 'https://example.com/person.schema.json',
            '$schema'     => 'https://json-schema.org/draft/2020-12/schema',
            'title'       => 'PetStore Action',
            'description' => 'This handler returns a welcoming string',
            'required'    => [],
            'properties'  => [],
        ];

    }//end getConfiguration()


    /**
     * This function runs the service.
     *
     * @param array $data          The data from the call
     * @param array $configuration The configuration of the action
     *
     * @throws GatewayException
     * @throws CacheException
     * @throws InvalidArgumentException
     * @throws ComponentException
     *
     * @return array
     *
     * @SuppressWarnings("unused") Handlers ara strict implementations
     */
    public function run(array $data, array $configuration): array
    {
        return $this->petStoreService->petStoreHandler();

    }//end run()


}//end class
