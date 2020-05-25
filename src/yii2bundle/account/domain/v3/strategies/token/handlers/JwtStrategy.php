<?php

namespace yii2bundle\account\domain\v3\strategies\token\handlers;

use PhpBundle\Crypt\Domain\Entities\JwtEntity;
use PhpBundle\Crypt\Domain\Interfaces\Services\JwtServiceInterface;
use PhpBundle\Crypt\Domain\Repositories\Config\ProfileRepository;
use PhpBundle\Crypt\Domain\Services\JwtService;
use yii\web\UnauthorizedHttpException;
use yii2bundle\account\domain\v3\dto\TokenDto;
use yii2bundle\account\domain\v3\entities\LoginEntity;
use yii2rails\domain\data\Query;

class JwtStrategy implements HandlerInterface {
	
	public $profile;
	
	public function getIdentityId(TokenDto $tokenDto) {

        $jwtService = $this->createJwtService();
        $jwtService->verify($tokenDto->token, $this->profile);
        $jwtEntity = $jwtService->decode($tokenDto->token, $this->profile);
		return $jwtEntity->payload->subject->id;
	}
	
	public function forge($userId, $ip, $profile = null) {
		$subject = [
			'id' => $userId,
		];

        $jwtEntity = new JwtEntity;
        $jwtEntity->subject = $subject;
        $profile = $profile ? $profile : $this->profile;
        $jwtService = $this->createJwtService();
        $tokenString = $jwtService->sign($jwtEntity, $profile);



        $jwtEntity = $jwtService->decode($tokenString, $this->profile);

        //dd($jwtEntity);

		return 'jwt '  . $tokenString;
	}

    private function buildToken(LoginEntity $loginEntity): string {
        $jwtEntity = new JwtEntity;
        $jwtEntity->subject = $loginEntity->id;
        $jwtService = $this->createJwtService();
        $tokenString = $jwtService->sign($jwtEntity, 'auth');
        return $tokenString;
    }

    private function createJwtService(): JwtServiceInterface {
        $profileRepo = new ProfileRepository;
        $jwtService = new JwtService($profileRepo);
        return $jwtService;
    }
}
