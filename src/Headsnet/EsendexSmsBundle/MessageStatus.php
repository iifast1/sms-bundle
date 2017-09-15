<?php
declare(strict_types=1);

namespace Headsnet\EsendexSmsBundle;

/**
 * Class MessageStatus
 */
class MessageStatus
{
	const STATUS_QUEUED    = 'queued';
	const STATUS_SENT      = 'sent';
	const STATUS_DELIVERED = 'delivered';
	const STATUS_ERROR     = 'error';
	const STATUS_RECEIVED  = 'received';
}
