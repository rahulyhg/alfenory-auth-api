<?php
namespace Alfenory\Auth\V1\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * role_privileg
 * 
 * @ORM\Table(name="auth_roleprivileg")
 * @ORM\Entity
 **/
class RolePrivileg implements \JsonSerializable {
    /** @ORM\Id @ORM\Column(type="guid") @ORM\GeneratedValue(strategy="UUID") */
    private $id;
    public function getId() {
        return $this->id;
    }
    
    /** @ORM\Column(type="string", length=36) */
    private $role_id;
    public function getRoleId() {
        return $name;
    }
    public function setRoleId($role_id) {
        $this->role_id = $role_id;
    }
    
    /** @ORM\Column(type="string", length=255) **/
    private $privileg;
    public function getPrivileg() {
        return $this->privileg;
    }
    public function setPrivileg($privileg) {
        $this->privileg = $privileg;
    }

    public function jsonSerialize() {
        $vars = get_object_vars($this);
        return $vars;
    }
}
