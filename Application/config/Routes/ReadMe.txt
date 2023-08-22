Expanded chain:(roadmap)
The calling stack of Client-server route components.
host --- backported from executor, always route behaviour.
    ->executor
        ->arguments
            ->remote
                ->connection
                    ->protocol
                        -><?>header
                           ->request{
                               ->{path}
                                   ->{query}
                           }->C-S_visit          - final


IOStream reading outside from current context. Env contains Arguments with logic.
