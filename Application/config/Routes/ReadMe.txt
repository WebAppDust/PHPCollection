Expanded chain:(roadmap)
The calling stack of Client-server route components.
host --- backported from executor, always route behaviour.
    ->executor                         - script is live
        ->arguments                    - empty or not empty, everywhere. Next - Just Environment.
            ->remote                   - process touched from outside
                ->connection           - connection established, sides ready
                    ->protocol         - selected schema of data transfer
                        -><?>header    - parsed protocol hyperdata
                           ->request{  - parsed request
                               ->{path}         - (protocol option)
                                   ->{query}    - very optional (protocol)
                           }->C-S_visit          - final
, where level 3 is shell/cli or server task layer. 
containment data needed for comparsion. For route completion needed callable controller.
IOStream reading outside from current context. Env contains Arguments with logic.

The fields host and executor is required even if the executor is human.
The R. host can connected without protocols. Inclusive - script server.
For code, - for logic source, execution controller is interpreter called by 
host by action.

For script the caller accesible only as interpreter env, but
for application or program the executor is host or API &
can be aliased as executor.

single argument __FILE__ is equal of empty. 
