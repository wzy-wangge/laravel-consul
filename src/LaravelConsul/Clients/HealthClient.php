<?php
namespace Wzy\LaravelConsul\Clients;

use Wzy\LaravelConsul\Entities\Health\ServiceHealthEntity;

class HealthClient extends Client{
	const HEALTH_URI_PREFIX = '/v1/health/';

	public function __construct(){
		parent::__construct(HealthClient::HEALTH_URI_PREFIX);
	}

	public function getHealthyServicesInstances($service, $options=[]){
		$consulResponse = $this->getConsulResponse('service/' . $service . '?passing');

		$services = [];
		foreach ($consulResponse as $service) {
			$services[] = ServiceHealthEntity::fromArray($service);
		}

		return $services;
	}
}