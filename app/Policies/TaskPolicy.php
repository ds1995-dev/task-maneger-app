<?php

namespace App\Policies;

use App\Models\Task;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class TaskPolicy
{
    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Task $task): Response
    {
        return $user->id === $task->user_id
        ? Response::allow()
        : Response::deny('このタスクを閲覧する権限がありません');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Task $task): Response
    {
        return $user->id === $task->user_id
        ? Response::allow()
        : Response::deny('このタスクを編集する権限がありません');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Task $task): Response
    {
        return $user->id === $task->user_id
        ? Response::allow()
        : Response::deny('このタスクを削除する権限がありません');
    }
}
