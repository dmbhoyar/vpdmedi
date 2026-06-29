<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'order_number',
        'name',
        'phone',
        'city',
        'business_type',
        'products',
        'status',
        'admin_notes',
    ];

    public static function generateOrderNumber(): string
    {
        return 'ORD-' . strtoupper(substr(md5(uniqid()), 0, 8));
    }

    public function getStatusBadgeAttribute(): string
    {
        return match($this->status) {
            'pending'    => 'warning',
            'confirmed'  => 'info',
            'processing' => 'primary',
            'dispatched' => 'secondary',
            'delivered'  => 'success',
            'cancelled'  => 'danger',
            default      => 'secondary',
        };
    }
}
