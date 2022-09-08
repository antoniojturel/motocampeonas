using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.ComponentModel.DataAnnotations.Schema;
using System.Linq;
using System.Threading.Tasks;

namespace MotocampeonasGSRM.Models
{
    [Table("googlescriptrankingmotocross")]
    public class Motocampeona
    {
        [Key]
        // [DatabaseGenerated(DatabaseGeneratedOption.Identity)]
        [Column("ID")]
        public int Id { get; set; }
        [Column("CILINDRADA")]
        public String Cilindrada { get; set; }
        [Column("VICTORIAS")]
        public String Victorias { get; set; }
        [Column("IDDONUT")]
        public String Iddonut { get; set; }
    }
}

