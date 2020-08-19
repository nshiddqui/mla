<?php

namespace App\Model\Table;

use Cake\ORM\Table;

class DropdownsTable extends Table {

    public function findstatus() {
        $status = ['1' => 'Active', '0' => 'Inactive'];
        return $status;
    }

    public function userroles() {
        $status = ['1' => 'Admin', '2' => 'Student'];
        return $status;
    }

    public function subjects() {
        $subjects = [
            'pharmacology' => 'Pharmacology',
            'microbiology' => 'Microbiology',
            'physiology' => 'Physiology',
            'pathology' => 'Pathology',
            'anatomy' => 'Anatomy',
            'surgery' => 'Surgery',
            'biochemistry' => 'Biochemistry'
        ];
        return $subjects;
    }

    public function courses() {
        $status = ['pure' => 'Pure', 'rough' => 'Rough', 'stonesilver' => 'Stone & Silver'];
        return $status;
    }

}
