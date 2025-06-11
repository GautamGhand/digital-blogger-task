<a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-primary me-1">
    <i class="bx bx-edit-alt me-1"></i> Edit
</a>

<a href="{{ route('users.delete', $user->id) }}" class="btn btn-sm btn-danger ">
       <i class="bx bx-trash me-1"></i> Delete
</a>