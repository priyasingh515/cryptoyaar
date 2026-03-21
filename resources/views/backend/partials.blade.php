<tr>
    <td>{{ $user->id }}</td>

    <td>
        {{ str_repeat('— ', $level - 1) }}
        {{ $user->name }}
        <span class="badge bg-success">L{{ $level }}</span>
    </td>

    <td>
        {{ $user->parentUser->name ?? 'Root' }}
    </td>

    <td>{{ $user->referral_code }}</td>

    <td>
        <div style="font-size:13px;">
            <strong>₹{{ number_format($user->wallet_total, 2) }}</strong><br>

            <span class="text-danger">
                🔒 {{ number_format($user->wallet_locked, 2) }}
            </span><br>

            <span class="text-success">
                ✅ {{ number_format($user->wallet_available, 2) }}
            </span>
        </div>
    </td>

    <td>
        @if ($user->wallet_locked > 0)
            <span class="badge bg-danger">🔒 Locked</span>
        @else
            <span class="badge bg-success">✅ Active</span>
        @endif
    </td>

    <td>
        <a href="{{ route('user.edit', $user->id) }}" class="btn btn-sm btn-info">
            Edit
        </a>

        @if ($user->can_refund)
            <div class="text-danger" style="font-size:12px;">
                ⏳ {{ $user->refund_time_left }} left
            </div>

            <form action="{{ route('user.refund', $user->id) }}" method="POST" class="d-inline">
                @csrf
                <button class="btn btn-sm btn-warning">
                    Refund
                </button>
            </form>
        @else
            <span class="badge bg-secondary">
                Refund Expired
            </span>
        @endif

        <button class="btn btn-sm btn-danger" onclick="confirmDelete({{ $user->id }})">
            Delete
        </button>

        <form id="delete-form-{{ $user->id }}" action="{{ route('user.destroy', $user->id) }}" method="POST"
            style="display:none;">
            @csrf
            @method('DELETE')
        </form>
    </td>
</tr>

@if ($user->referrals && $user->referrals->count())
    @foreach ($user->referrals as $child)
        @include('backend.partials.user-row', [
            'user' => $child,
            'level' => $level + 1,
        ])
    @endforeach
@endif
