<?php

namespace App\View\Components;

use App\GitHub\Dto\IssueData;
use App\Project as ProjectModel;
use Carbon\Carbon;
use Illuminate\View\Component;

class IssueDetail extends Component
{
    public $issue;
    public $project;

    public function __construct(IssueData $issue, ProjectModel $project)
    {
        $this->issue = $issue;
        $this->project = $project;
        $this->issue->date = Carbon::createFromFormat('Y-m-d\TG:i:s\Z', $issue->created_at);
    }

    public function render()
    {
        return view('components.issue-detail');
    }
}