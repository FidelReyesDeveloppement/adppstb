<?php
/**
 * Created by PhpStorm.
 * User: fidelenriquereyesllerena
 * Date: 14/02/2015
 * Time: 23:43
 */

namespace Adp\FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;


/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 *
 * Class User
 * @package Adp\FrontendBundle\Entity
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * @var
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
    }

}