<?
/**
 * Classe user_model()
 *
 * @package     ci-control-panel
 *
 * @author      Ruben Giancarlo Elmo
 * @link        http://www.mantisworks.net
 */
class user_model extends CI_Model 
{

    var $ID			= NULL;
    var $typeID		= 1;
	var $name		= NULL;
	var $surname	= NULL;
	var $email		= NULL;
	var $password	= NULL;
	var $avatar		= NULL;
	var $accesstime = NULL;
    var $enable		= 1;
	
    function __construct()
    {
        parent::__construct();
    }
    
    /**
     * Method get_user()
     * Get user by ID.
     *
     * @package     ci-control-panel
     * @param       integer $ID
     * @return		void
     *
     * @author      Ruben Giancarlo Elmo
     * @link        http://www.mantisworks.net
     */
    public function get_user($ID)
    {
        if(!$ID)
            return $this;
        
        $this->db->where('ID', $ID);
        $query = $this->db->get('us_user');
        
        return ($query->num_rows > 0) ? current($query->result()) : $this;
    }
    
    /**
     * Method search()
     * Search users by keyword.
     *
     * @package     ci-control-panel
     * @param       string $key
     * @param       integer $num
     * @param       integer $offset
     * @return		void
     *
     * @author      Ruben Giancarlo Elmo
     * @link        http://www.mantisworks.net
     */
    public function search($key = null, $num = 40, $offset = 0)
    {
        if($offset)
            $offset = "{$offset},";
        
        $query = $this->db->query("
                SELECT
                    u.*,
                    u.ID as ID,
                    g.label as level
                FROM
                    us_user u
                JOIN us_user_type g ON (u.typeID = g.ID)
                WHERE
                    u.name LIKE '%{$key}%'
                OR
                    u.surname LIKE '%{$key}%'
                OR
                    u.ID = '{$key}'
                OR
                    u.email = '{$key}'
                ORDER BY u.name ASC
                LIMIT {$offset}{$num};");
				
        return $query->result();
    }
    
    /**
     * Method count()
     * Count all records
     *
     * @package     ci-control-panel
     * @param       null
     * @return		void
     *
     * @author      Ruben Giancarlo Elmo
     * @link        http://www.mantisworks.net
     */
    public function count()
    {
        return $this->db->count_all('us_user');
    }
}