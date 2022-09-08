using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.ComponentModel.DataAnnotations.Schema;
using System.Linq;
using System.Threading.Tasks;

namespace MotocampeonasRV.Models
{
    [Table("rankingvelocidad")]
    public class Motocampeona
    {
        [Key]
        // [DatabaseGenerated(DatabaseGeneratedOption.Identity)]
        [Column("POSICION")]
        public int Posicion { get; set; }
        [Column("MARCA")]
        public String Marca { get; set; }
        [Column("ALTa")]
        public String Alta { get; set; }
        [Column("MEDIA")]
        public String Media { get; set; }
        [Column("BAJA")]
        public String Baja { get; set; }
        [Column("IDDONUTALTA")]
        public String Iddonutalta { get; set; }
        [Column("IDDONUTMEDIA")]
        public String Iddonutmedia { get; set; }
        [Column("IDDONUTBAJA")]
        public String Iddonutbaja { get; set; }
    }
}

