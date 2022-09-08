using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.ComponentModel.DataAnnotations.Schema;
using System.Linq;
using System.Threading.Tasks;

namespace MotocampeonasRM.Models
{
    [Table("rankingmotocross")]
    public class Motocampeona
    {
        [Key]
        // [DatabaseGenerated(DatabaseGeneratedOption.Identity)]
        [Column("POSICION")]
        public int Posicion { get; set; }
        [Column("MARCA")]
        public String Marca { get; set; }
        [Column("ALTA")]
        public String Alta { get; set; }
        [Column("BAJA")]
        public String Baja { get; set; }
        [Column("IDDONUTALTA")]
        public String Iddonutalta { get; set; }
        [Column("IDDONUTBAJA")]
        public String Iddonutbaja { get; set; }
    }
}

