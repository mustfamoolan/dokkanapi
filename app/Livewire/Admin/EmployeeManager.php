<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

class EmployeeManager extends Component
{
    use WithPagination;

    public $search = '';

    #[Layout('layouts.admin')]
    #[Title('إدارة الموظفين - Dokkan')]
    public function render()
    {
        $employees = User::where(function($query) {
                $query->where('name', 'like', '%' . $this->search . '%')
                      ->orWhere('employee_id', 'like', '%' . $this->search . '%')
                      ->orWhere('phone', 'like', '%' . $this->search . '%');
            })
            ->orderBy('id', 'desc')
            ->paginate(10);

        return view('livewire.admin.employees', [
            'employees' => $employees,
        ]);
    }

    public function toggleStatus($userId)
    {
        $user = User::findOrFail($userId);
        
        // Prevent super admin from suspending themselves
        if ($user->id === auth()->id()) {
            return;
        }

        $user->status = $user->status === 'active' ? 'suspended' : 'active';
        $user->save();
        
        session()->flash('message', 'تم تحديث حالة الموظف بنجاح.');
    }
}
