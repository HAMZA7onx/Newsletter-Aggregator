<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\AdminSide\Rsslist;

use Livewire\WithPagination;

class RssDashboard extends Component
{
    use WithPagination;
    public $search = '';
    public $perPage = 5;
    public $admin = '';

    public $sortBy = 'name';
    public $sortDirection = 'DESC';

    public function delete(Rsslist $rss) {
        $rss->delete();
    }

    public function setSortBy($field) {
        if ($this->sortBy === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortDirection = 'asc';
        }

        $this->sortBy = $field;
    }

    public function render()
    {
        $rssLinks = Rsslist::search($this->search)
            ->orderBy($this->sortBy, $this->sortDirection)
            ->paginate($this->perPage);

        return view('livewire.rss-dashboard',compact('rssLinks'));
    }

    /*************** rss links popup delete form ***************/
    public $rss_link_id;
    public function deleteRssLink(int $rss_link_id)
    {
        $this->rss_link_id = $rss_link_id;
    }

    public function destroyRssLink()
    {
        Rsslist::find($this->rss_link_id)->delete();
        session()->flash('message','Student Deleted Successfully');
        $this->dispatch('close-modal');
    }

    public function closeModal()
    {
    }
}
