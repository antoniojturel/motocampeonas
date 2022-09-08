using MotocampeonasRM.Models;
using Microsoft.EntityFrameworkCore;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace MotocampeonasRM.Data
{
    public class MotocampeonasContext : DbContext
    {
        public MotocampeonasContext(DbContextOptions options) : base(options)
        { }

        public DbSet<Motocampeona> Motocampeonas { get; set; }
    }
}
