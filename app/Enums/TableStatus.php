<?php
namespace App\Enums;

enum TableStatus: string {
	case Panding = 'panding';
	case Avalable = 'avalable';
	case Unavalable = 'unavalable';
}